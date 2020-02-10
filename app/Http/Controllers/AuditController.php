<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Grade;
use App\User;
use App\Category;

class AuditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update_data(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'university' => ['required', 'string', 'min:3', 'max:255'],
            'whatsapp' => ['required', 'string', 'min:10', 'max:16'],
            'line' => ['required', 'string', 'min:3', 'max:20'],
            'grade_id' => ['required'],
            'agreement' => ['required'],
            'team_name' => ['required', 'string', 'min:3', 'max:25'],
            'team1' => ['required', 'string', 'min:3', 'max:255'],
            'team2' => ['required', 'string', 'min:3', 'max:255'],
        ]);


        ## mendapatkan id_user dan id_competition
        $user = Auth::user();

        ## periksa apakah ada data di database
        if (!empty($user)) {
            if ($user->name != $request->name) {
                $data_user['name'] = $request->name;
            }
            if ($user->whatsapp != $request->whatsapp) {
                $data_user['whatsapp'] = $request->whatsapp;
            }
            if ($user->university != $request->university) {
                $data_user['university'] = $request->university;
            }
            if ($user->line != $request->line) {
                $data_user['line'] = $request->line;
            }
            if ($user->grade_id != $request->grade_id) {
                $data_user['grade_id'] = $request->grade_id;
            }
            if ($user->team_name != $request->team_name) {
                $data_user['team_name'] = $request->team_name;
            }
            if ($user->team1 != $request->team1) {
                $data_user['team1'] = $request->team1;
            }
            if ($user->team2 != $request->team2) {
                $data_user['team2'] = $request->team2;
            }

            User::whereId($user->id)->update($data_user);

            return back()->with(['success' => 'Data peserta dan tim berhasil diubah.']);
        }
    }

    public function upload_ktm(Request $request)
    {
        request()->validate([
            'agreement' => ['required'],
            'ktm' => ['required', 'mimes:zip', 'max:8912']
        ]);

        ## preset awal
        $destinationPath = 'userdocs2020/audit';
        $formatfile = 'KTM';

        ## mendapatkan id_user dan id_competition
        $user = Auth::user();
        $username = $user->name;
        $team_name = $user->team_name;

        ## periksa apakah ada data di database
        if (!empty($user)) {
            $doc_ktm = $request->file('ktm');
            if ($doc_ktm) {
                # penamaan file baru
                $profilefile = $user->email . '_' . $username . '_' . $team_name . '_' . $formatfile . '_' . date('Ymd_his') . '.' . $doc_ktm->getClientOriginalExtension();
                # file lama dihapus
                if (!empty($user->doc_ktm)) {
                    if (public_path($destinationPath . '/' . $user->doc_ktm)) {
                        unlink(public_path($destinationPath . '/' . $user->doc_ktm));
                    }
                }
                # penggantian file lama dengan yang baru
                $doc_ktm->move(public_path($destinationPath), $profilefile);
            }

            $data_user['ktm'] = "$profilefile";

            User::whereId($user->id)->update($data_user);

            return back()->with(['success' => 'KTM peserta dan tim berhasil diupload.']);
        }
    }

    public function upload_transaction(Request $request)
    {
        request()->validate([
            'agreement' => ['required'],
            'transaction' => ['required', 'mimes:png,jpg,jpeg,pdf', 'max:2048']
        ]);

        ## preset awal
        $destinationPath = 'userdocs2020/audit';
        $formatfile = 'BuktiPembayaran';

        ## mendapatkan id_user dan id_competition
        $user = Auth::user();
        $username = $user->name;

        ## periksa apakah ada data di database
        if (!empty($user)) {
            $doc_transaction = $request->file('transaction');
            if ($doc_transaction) {
                # penamaan file baru
                $profilefile = $user->email . '_' . $username . '_' . $formatfile . '_' . date('Ymd_his') . '.' . $doc_transaction->getClientOriginalExtension();
                # file lama dihapus
                if (!empty($user->doc_transaction)) {
                    if (public_path($destinationPath . '/' . $user->doc_transaction)) {
                        unlink(public_path($destinationPath . '/' . $user->doc_transaction));
                    }
                }
                # penggantian file lama dengan yang baru
                $doc_transaction->move(public_path($destinationPath), $profilefile);
            }

            $data_user['transaction'] = "$profilefile";

            User::whereId($user->id)->update($data_user);

            return back()->with(['success' => 'Bukti Pembayaran berhasil diupload.']);
        }
    }

    public function finalizing_audit(Request $request)
    {
        request()->validate([
            'agreement' => ['required']
        ]);

        $user = Auth::user();
        if (!empty($user)) {
            if (!empty($user->transaction) && !empty($user->ktm) && !empty($user->team_name) && !empty($user->team1) && !empty($user->team2)) {
                $data_user['status'] = 1;
                User::whereId($user->id)->update($data_user);

                return back()->with(['success' => 'Data Pendaftaran berhasil difinalisasi.']);
            } else {
                return back()->with(['error' => 'Tahap pendaftaran belum diselesaikan semuanya.']);
            }
        } else {
            return back()->with(['error' => 'Data Pendaftaran gagal difinalisasi.']);
        }
    }
}

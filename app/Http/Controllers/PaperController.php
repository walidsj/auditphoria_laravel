<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Grade;
use App\User;
use App\Category;

class PaperController extends Controller
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
    public function update_datadiri(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'university' => ['required', 'string', 'min:3', 'max:255'],
            'whatsapp' => ['required', 'string', 'min:10', 'max:16'],
            'line' => ['required', 'string', 'min:3', 'max:20'],
            'grade_id' => ['required'],
            'ktm' => ['required', 'mimes:jpg,jpeg,png,pdf', 'max:2048']
        ]);

        ## preset awal
        $destinationPath = 'userdocs2020/paper';
        $formatfile = 'KTM';

        ## mendapatkan id_user dan id_competition
        $user = Auth::user();

        ## periksa apakah ada data di database
        if (!empty($user)) {
            // if($exist_kdpn) {
            if ($user->name != $request->name) {
                $data_user['name'] = $request->name;
                $username = $data_user['name'];
            } else {
                $username = $user->name;
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

            $registform = $request->file('ktm');
            if ($registform) {
                # penamaan file baru
                $profilefile = $user->email . '_' . $username . '_' . $formatfile . '_' . date('Ymd_his') . '.' . $registform->getClientOriginalExtension();
                # file lama dihapus
                if (!empty($user->ktm)) {
                    if (public_path($destinationPath . '/' . $user->ktm)) {
                        unlink(public_path($destinationPath . '/' . $user->ktm));
                    }
                }
                # penggantian file lama dengan yang baru
                $registform->move(public_path($destinationPath), $profilefile);
            }

            $data_user['ktm'] = "$profilefile";

            User::whereId($user->id)->update($data_user);

            return back()->with(['success' => 'Data dan berkas berhasil diubah.']);
        }
    }
}

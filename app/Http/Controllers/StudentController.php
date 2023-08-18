<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Customer;
use Illuminate\Support\Str;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    //
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            // dd($request->image);
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                // dd($request->avatar);
                $avatar = $request->avatar;
                $avatar = uploadFile('avatar', $request->file('avatar'));
                // dd($avatar);
            }
            $params = $request->except('_token');
            $params['avatar'] = $avatar;
            $student = Student::create($params);

            if ($student->id) {
                // Session::flash('success', 'Thêm khách hàng thành công');
                return redirect('list_users');
            }
        }
        return view('admin.add_user');
    }

    public function listUsers(Request $request)
    {
        $student = new Student();
        $listStudent = $student::all();
        if ($request->post() && $request->searchStudent) {
            $listStudent = $student::where('name', 'like', '%' . $request->searchStudent . '%')->get();
        }
        return view('admin.list_users', compact('listStudent'));
    }
    public function edit(Request $request, $id)
    {
        $student = DB::table('students')
            ->where('id', $id)->first();
        $avatar = $request->avatar;
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                //                Xóa ảnh cũ khi có thực hiện post ảnh mới
                $resultDL = Storage::delete('/public/' . $student->avatar);
                if ($resultDL) {
                    $avatar = uploadFile('avatar', $request->file('avatar'));
                    $params['avatar'] =  $avatar;
                }
            } else {
                //                nếu không thay hình thì ảnh sẽ là ảnh cũ
                $params['avatar'] = $student->avatar;
            }
            $result = Student::where('id', $id)->update($params);
            if ($result) {
                return redirect('list_users');
            }
        }
        return view('admin.edit_user', compact('student'));
    }
    public function delete(Request $request, $id)
    {
        $studentDL = Student::where('id', $id)->delete();
        if ($studentDL) {
            return redirect('list_users');
        }
    }
}

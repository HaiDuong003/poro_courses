<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    // add
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
            $instructor = Instructor::create($params);

            if ($instructor->id) {
                // Session::flash('success', 'Thêm khách hàng thành công');
                return redirect('list_instructor');
            }
        }
        return view('admin.add_instructor');
    }

    //edit
    public function editInstructor(Request $request, $id)
    {
        $instructorEdit = DB::table('instructors')->where('id', $id)->first();
        // $avatar = $request->avatar;
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                //                Xóa ảnh cũ khi có thực hiện post ảnh mới
                $resultDL = Storage::delete('/public/' . $instructorEdit->avatar);
                if ($resultDL) {
                    $avatar = uploadFile('avatar', $request->file('avatar'));
                    $params['avatar'] =  $request->avatar;
                }
            } else {
                //                nếu không thay hình thì ảnh sẽ là ảnh cũ
                $params['avatar'] = $instructorEdit->avatar;
            }
            $result = Instructor::where('id', $id)->update($params);
            if ($result) {
                return redirect('list_instructor');
            }
        }
        return view('admin.edit_instructor', compact('instructorEdit'));
    }

    // list
    public function listInstructor(Request $request)
    {
        $instructor = new Instructor();
        $listInstructor = $instructor::all();
        return view('admin.list_instructor', compact('listInstructor'));
    }

    // delete
    public function delete(Request $request, $id)
    {
        $instructorDL = Instructor::where('id', $id)->delete();
        if ($instructorDL) {
            return redirect('list_instructor');
        }
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use App\Models\DanhMuc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminTinTucController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $allDM = DanhMuc::all();
        return view('admins.index', compact('allDM','user'));
    }
    public function create()
    {
        return view('admins.createadmin');
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tenDanhMuc' => 'required|max:255',
        ]);

        DanhMuc::create($validatedData);
        return redirect()->route('admin.index')->with('success', 'Thêm danh mục thành công.');
    }
    public function edit($id)
    {
        $danhMuc = DanhMuc::findOrFail($id);
        return view('admins.editadmin', compact('danhMuc'));
    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tenDanhMuc' => 'required|max:255',
        ]);

        $danhMuc = DanhMuc::findOrFail($id);
        $danhMuc->update($validatedData);
        return redirect()->route('admin.index')->with('success', 'Cập nhật thành công');
    }
    public function destroy($id)
    {
        $danhMuc = DanhMuc::findOrFail($id);
        $danhMuc->delete();
        return redirect()->route('admin.index')->with('success', 'Xóa thành công');
    }

}

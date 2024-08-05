<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\TinTuc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TinAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $allTinTuc = TinTuc::with('danhmuc')->get();
        return view('admins.indextintuc', compact('allTinTuc','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $danhMucs = DanhMuc::all();
        $user = User::all();
        return view('admins.createtintuc', compact('danhMucs', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tieuDe' => 'required|string|max:255',
            'noiDung' => 'required|string',
            'moTa' => 'required|string',
            'anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_danh_muc' => 'required|exists:danhmucs,id',
            'luotXem' => 'required',
        ]);

        if ($request->hasFile('anh')) {
            $imageName = time() . '.' . $request->anh->extension();
            $request->anh->move(public_path('image'), $imageName);
            $validatedData['anh'] = $imageName;
        }
        $validatedData['user_id'] = auth()->id();

        TinTuc::create($validatedData);
        return redirect()->route('admin.indextt')->with('success', 'Tin tức được thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tinTuc = TinTuc::findOrFail($id);
        $danhMucs = DanhMuc::all();
        $user = User::all();
        return view('admins.edittintuc', compact('tinTuc', 'danhMucs', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tieuDe' => 'required|string|max:255',
            'noiDung' => 'required|string',
            'moTa' => 'required|string',
            'anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_danh_muc' => 'required|exists:danhmucs,id',
            'user_id' => 'required|exists:users,id',
            'luotXem' => 'required|integer',
        ]);

        $tinTuc = TinTuc::findOrFail($id);

        if ($request->hasFile('anh')) {
            // Xóa ảnh cũ nếu có
            if ($tinTuc->anh && file_exists(public_path('image/' . $tinTuc->anh))) {
                unlink(public_path('image/' . $tinTuc->anh));
            }

            $imageName = time() . '.' . $request->anh->extension();
            $request->anh->move(public_path('image'), $imageName);
            $validatedData['anh'] = $imageName;
        } else {
            // Giữ nguyên tên ảnh cũ nếu không có ảnh mới
            $validatedData['anh'] = $tinTuc->anh;
        }

        $tinTuc->update($validatedData);
        return redirect()->route('admin.indextt')->with('success', 'Tin tức được cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tinTuc = TinTuc::findOrFail($id);

        // Xóa hình ảnh nếu có
        if ($tinTuc->anh) {
            $imagePath = public_path('image/' . $tinTuc->anh);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $tinTuc->delete();

        return redirect()->route('admin.indextt')->with('success', 'Tin tức đã được xóa thành công');
    }
}

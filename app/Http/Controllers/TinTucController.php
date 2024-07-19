<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinTucController extends Controller
{
    public function index()
    {
        $kh = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->where('id_danh_muc', 1)->get();


        $tinNB = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            'luotXem',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->whereIn('id_danh_muc', [1, 2,  4, 5, 6])->orderBy('luotXem', 'desc')->limit(3)->get();
        // var_dump($tinNB);
        // die;
        $tinNB2 = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            'luotXem',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->orderBy('luotXem', 'desc')->first();
        //   var_dump($tinNB2);
        // die;
        $allDM = DB::table('danhmucs')
            ->select('id', 'tenDanhMuc', 'created_at', 'updated_at')
            ->get();

        $yt2 = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->where('id_danh_muc', 4)->get();

        $hotNews = DB::table('tintucs')
            ->select(
                'id',
                'tieuDe',
                'noiDung',
                'moTa',
                'anh',
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('DAY(created_at) as day'),
                'id_danh_muc'
            )->whereIn('id_danh_muc', [1, 2, 3, 4, 5, 6])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();


        return view('clients.index', compact('kh', 'allDM', 'yt2', 'tinNB', 'tinNB2', 'hotNews'));
    }
    public function detail($id)
    {
        $chiTiet = DB::table('tintucs')->where('id', $id)->first();

        $allDM = DB::table('danhmucs')
            ->select('id', 'tenDanhMuc',  'created_at', 'updated_at')
            ->get();

        $relation = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            'luotXem',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->where('id', '!=', $id)->limit(4)->get();
        return view('clients.detail', compact('chiTiet', 'allDM', 'relation'));
    }
    public function tinTuc($id)
    {
        $tintuc = DB::table('tintucs')->select(
            'id',
            'tieuDe',
            'noiDung',
            'moTa',
            'anh',
            'luotXem',
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('DAY(created_at) as day'),
            'id_danh_muc'
        )->where('id_danh_muc', $id)->get();
        $allDM = DB::table('danhmucs')
            ->select('id', 'tenDanhMuc',  'created_at', 'updated_at')
            ->get();
        return view('clients.page', compact('tintuc', 'allDM'));
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $tintuc = DB::table('tintucs')
            ->select(
                'id',
                'tieuDe',
                'noiDung',
                'moTa',
                'anh',
                'luotXem',
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('DAY(created_at) as day'),
                'id_danh_muc'
            )
            ->where('tieuDe', 'like', '%' . $searchTerm . '%')
            ->get();

        $allDM = DB::table('danhmucs')
            ->select('id', 'tenDanhMuc', 'created_at', 'updated_at')
            ->get();

        return view('clients.page', compact('tintuc', 'allDM'));
    }
}

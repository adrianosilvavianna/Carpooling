<?php

namespace App\Http\Controllers\User\Diary;

use App\Domains\Diary;
use App\Http\Controllers\Controller;

class DiaryController extends Controller
{
	protected $diary;

    public function __construct(Diary $diary)
    {
        $this->diary = $diary;
    }

    public function index()
    {
    	return view('diary.index')->with('diaries', $this->diary->all());
    }

    public function create()
    {
		return view('diary.create');
    }

    public function store(Diary $diary)
    {
    	dd($diary);
    }

    public function edit()
    {
    	return view('diary.edit');
    }

    public function update(Diary $diary)
    {
    	dd($diary);
    }

    public function destroy(Diary $diary)
    {
    	dd($diary);
    }
}


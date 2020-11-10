<?php

namespace App\Http\Controllers;

use App\Models\TestCron;
use Illuminate\Http\Request;

class TestCronController extends Controller
{

    public function index()
    {
        //
    }


    public function create($comment)
    {
        TestCron::create([
            'comment' => $comment,
        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(TestCron $testCron)
    {
        //
    }


    public function edit(TestCron $testCron)
    {
        //
    }


    public function update(Request $request, TestCron $testCron)
    {
        //
    }

    public function destroy(TestCron $testCron)
    {
        //
    }
}

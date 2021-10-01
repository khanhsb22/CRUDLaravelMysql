<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    function getData() {
       // return ["name" => "Anil", "email" => "anil@test.com", "address" => "delhi"];
       return Student::all();
    }

    function addStudent(Request $req) {
        $st = new Student;
        $st->name = $req->name;
        $st->age = $req->age;

        $result = $st->save();
        if ($result) {
            return "Insert 1 field success !";
        } else {
            return "Insert field !";
        }
    }

    function updateStudent(Request $req) {
        $st = Student::find($req->id);
        $st->name = $req->name;
        $st->age = $req->age;

        $result = $st->save();
        if ($result) {
            echo "Update 1 field success with id: ".$req->id;
        } else {
            echo "Update fail !";
        }
    }

    function deleteStudent($id) {
        $st = Student::find($id);
        $result = $st->delete();
        if ($result) {
            echo "Deleted 1 field success !";
        } else {
            echo "Delete fail !";
        }
    }

    function getLast() {
        return Student::orderBy('id', 'desc')->first();
    }

    function deleteAllStudent() {
        $result = Student::truncate();
        if ($result) {
            echo "Deleted all field !";
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    function getAllStudents() {
        // echo "From StudentController !";
        // return view("users");
        // return Student::all(); // Print json array
        $data = Student::all();
        return view("students", ["students" => $data]);
    }

    function showData($id) {
        $student = Student::find($id);
        return view("edit_student", ["student" => $student]);
    }

    function editStudent(Request $req) {
        if (isset($_POST['save'])) {
            $student = Student::find($req->id);
            $student->name = $req->name;
            $student->age = $req->age;
            if ($student->save()) {
                return redirect('students');
            } else {
                echo "Update fail !";
            }
        }
        if (isset($_POST['cancel'])) {
            return redirect('students');
        }
    }

    function addStudent(Request $req) {
        if (isset($_POST['add'])) {
            $student = new Student;
            $student->name = $req->name;
            $student->age = $req->age;
            if ($student->save()) {
                return redirect('students');
            } else {
                echo "Insert fail !";
            }
        }
        if (isset($_POST['cancel'])) {
            return redirect('students');
        }
    }

    function deleteStudent($id) {
        $student = Student::find($id);
        if ($student->delete()) {
            return redirect("students");
        } else {
            echo "Delete fail !";
        }
    }

    function deleteAllStudent() {
        if (Student::truncate()) {
            return redirect('students');
        } else {
            echo "Delete all record fail !";
        }
    }

}

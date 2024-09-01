<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AttendanceController extends Controller
{
    public function generatePDF()
    {
        // Example data for students
        $students = [
            ['name' => 'John Doe', 'status' => 'Present'],
            ['name' => 'Jane Doe', 'status' => 'Absent'],
            // Add more students as needed
        ];

        // Load the view and pass data to it
        $pdf = PDF::loadView('pdf.attendance', ['students' => $students]);

        // Return the generated PDF as a download or inline view
        return $pdf->stream('attendance_list.pdf');
    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Attendance List</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100%;
        }

        .header {
            line-height: 1px;
            margin-top: 30px;
            font-size: 10px;
        }

        .header .header-tag {
            font-weight: bold;
            margin: 20px;
        }

        .header .info {
            font-size: 10px;
            text-align: left;
        }


        .class-info p {
            display: inline-block;
            margin-right: 10px;
            /* Adjust spacing as needed */
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #aaa;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
            font-size: 9px;

        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('images/header1.png') }}" alt="School Logo">
        <p class="header-tag">Monitoring Sheet</p>
        <p class="header-tag">Class Orientation</p>
        <div class="info">
            <div class="class-info">
                <p>Course:IT 107- Information Assurance and Security I</p>
                <p>Sem: 1st semester</p>
                <p>S.Y.: 2024-2025</p>
            </div>
            <p>Code: CDIJ1</p>
            <p>Instructor: Federico M. Griño</p>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>NAME OF STUDENTS</th>
                <th>StatusVision, Mission & College Goals</th>
                <th>Syllabus/
                    Course Outline
                </th>
                <th>
                    School Classroom Policies
                </th>
                <th>
                    Grading System
                </th>
                <th>
                    Course Requirements/
                    Project
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            {{-- @foreach ($students as $student)
                <tr>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['status'] }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <div class="footer">
        Page
        <script type="text/php">
            if ( isset($pdf) ) {
                $pdf->page_script('
                    if ($PAGE_COUNT > 1) {
                        $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                        $size = 10;
                        $pageText = "Page " . $PAGE_NUM . " of " . $PAGE_COUNT;
                        $y = 15;
                        $x = 520;
                        $pdf->text($x, $y, $pageText, $font, $size);
                    }
                ');
            }
        </script>
    </div>
</body>

</html>

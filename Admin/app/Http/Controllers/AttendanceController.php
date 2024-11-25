namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    // Show the attendance form
    public function showAttendance()
    {
        // Fetch students with the role 'student' (name and IC number only)
        $students = User::where('role', 'Student')->select('id', 'name', 'ic_number')->get();

        dd($students);

        return view('attendance', compact('students')); // Pass data to the Blade template
    }

    // Store attendance records
    public function storeAttendance(Request $request)
    {
        // Validate that at least one attendance checkbox is selected
        $request->validate([
            'attendance' => 'required|array',
            'attendance.*' => 'exists:users,id', // Ensure IDs exist in the `users` table
        ]);

        $currentDate = now()->format('Y-m-d'); // Today's date

        // Loop through selected students and save attendance
        foreach ($request->attendance as $studentId) {
            $student = User::find($studentId); // Fetch the student by ID

            DB::table('attendance_records')->insert([
                'ic_number' => $student->ic_number, // IC Number from the student record
                'attendance_date' => $currentDate, // Today's date
                'is_present' => true, // Mark as present
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Redirect back with success message
        return redirect()->route('attendance.show')->with('success', 'Attendance recorded successfully!');
    }
}

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;

    protected $fillable = ['ic_number', 'attendance_date', 'is_present'];

    public function student()
    {
        return $this->belongsTo(User::class, 'ic_number', 'ic_number');
    }
}

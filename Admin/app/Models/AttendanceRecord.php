namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'date', 'is_present', 'marked_by'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
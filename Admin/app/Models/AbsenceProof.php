namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenceProof extends Model
{
    use HasFactory;

    protected $fillable = ['ic_number', 'proof_file', 'reason', 'is_approved', 'reviewed_by'];

    public function student()
    {
        return $this->belongsTo(User::class, 'ic_number');
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }
}

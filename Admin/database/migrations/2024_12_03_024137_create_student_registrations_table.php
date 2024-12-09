use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('ic_number', 20)->unique(); // Unique IC number
            $table->string('name', 100); // Name
            $table->string('class', 50); // Class
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}

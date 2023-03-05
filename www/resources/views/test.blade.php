@php

/*$con = new PDO('mysql:host=mysql-laravel', 'laravel', 'laravelpasswd');
$sql = 'SHOW databases';
$query = $con->query($sql);

while ($val = $query->fetch()) {
    var_dump($val);
}*/

use Illuminate\Support\Facades\DB;

echo "<pre>";
//print_r(DB::connection('mysql'));
print_r(DB::table('migrations')->get());
echo "</pre>";

@endphp
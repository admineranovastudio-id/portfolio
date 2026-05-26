<?php
$u = App\Models\User::first(); 
if($u) { 
    $u->email = 'admin@nauvan.com'; 
    $u->password = bcrypt('Nauvanurilham.11'); 
    $u->save(); 
    echo "User updated successfully!\n"; 
} else { 
    echo "No user found.\n"; 
}

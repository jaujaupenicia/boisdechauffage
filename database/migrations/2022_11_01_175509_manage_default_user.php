<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DEFINITION DU SUPER USER
        // VALEUR DU DECOUPAGES TERRITORIALES DU BENIN 

        DB::statement("    
        INSERT INTO clients (id, nom, prenom, email, telephone, adresse, password, isAdmin, lien_whatsapp, created_at, updated_at) VALUES 
        ('1', 'TOGNON', 'Jaurès', 'nelsonfriedrich308@gmail.com', '61734777', 'Calavi', '$2y$10\$F8BfXaS5UdLL7D9ykb2nzue336IKHEutt4P.Prx2f.D4OdwKE1OCy', '1', NULL, NULL, NULL);
        ");

        DB::statement("
        INSERT INTO entreprise_infos(id, nom, heure_ouverture, heure_fermerture, addresse, email_support, telephone, lien_support_whatsapp, created_at, updated_at) VALUES 
        (1, 'e-chauffage-pro', '15:00:08', '20:00:15', '3/4 Boe Street Roat', 'e-chauffage@gmail.com', '98442014', NULL, '2022-11-02 10:07:39', '2022-11-02 10:07:39') 
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

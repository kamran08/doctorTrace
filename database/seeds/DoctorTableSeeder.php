<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr Saleh Ahmed Tahlil';
        $Doctor->email = 'saleh@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Cardiologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();
        
        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Sakir Ahmed Shaheen';
        $Doctor->email = 'sakir@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Cardiologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Ayesha Chowdhury';
        $Doctor->email = 'ayesha@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Dentist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Prof. Dr. MD Aminur Rahman Laskar';
        $Doctor->email = 'aminur@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. MONOARUL ISLAM BHUIYAN';
        $Doctor->email = 'monuarul.bhuiyan@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Chest Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. ZAKARIA MAHMOOD';
        $Doctor->email = 'zakaria.mahmood@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Chest Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. AKM Daud';
        $Doctor->email = 'akm.daud@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Colorectal surgeon';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. MD Abu Shahed';
        $Doctor->email = 'md.abu.shahed@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Dentist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md. Tafazzul Islam';
        $Doctor->email = 'md.tafazzul.islam@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Dentist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr Porimol Kumar Sen';
        $Doctor->email = 'porimol.kumar.sen@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Dermatologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Mohammed Iqbal Ahmed';
        $Doctor->email = 'mohammed.iqbal.ahmed@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Dermatologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr Hussain Ahmed';
        $Doctor->email = 'hussain.ahmed@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Endrocrinology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Anisur Rahman';
        $Doctor->email = 'anisur.rahman@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Endrocrinology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. M.A Kaium Ansari';
        $Doctor->email = 'm.a.kaium.ansari@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'ENT specialist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. MD Mozammal Haque Faruk';
        $Doctor->email = 'm.mozammal.haque.faruk@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'ENT specialist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Muhammed Abdul Kadir';
        $Doctor->email = 'ma.kadir@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'General Surgery';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Showkat Uddin Ahmed';
        $Doctor->email = 'showkat.uddin.ahmed@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'General Surgery';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Lipika Das';
        $Doctor->email = 'lipika.das@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930921';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Gynecology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Salma Akhtar';
        $Doctor->email = 'salma.akhtar@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Gynecology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Mustak Uddin Ahmed';
        $Doctor->email = 'mustak.uddin.ahmed@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930921';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Liver Specialist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. KMJ Jaki';
        $Doctor->email = 'k.m.j.jaki@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930965';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Liver Specialist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Sayed Shakawat Hussain';
        $Doctor->email = 'sayed.shakawat.hussain@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930921';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Oliur Rahman';
        $Doctor->email = 'md.oliur.rahman@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930965';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Ibrahim Khalil';
        $Doctor->email = 'md.ibrahim.khalil@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930922';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Nephrologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Nazmul Islam';
        $Doctor->email = 'md.nazmul.islam@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930934';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Neurology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Enayat Hussain';
        $Doctor->email = 'dr.md.enayat.hussain@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930928';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Neurology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Nazrul Hussain';
        $Doctor->email = 'md.nazrul.hussain@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930937';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Nephrologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Enayat Hussain';
        $Doctor->email = 'md.enayat.hussain@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930928';
        $Doctor->location = 'Sylhet';
        $Doctor->degree = 'B.Sc, MBBS, DDVL, MD-Dermatology Dermatology, Trichologist, Cosmetologist, 14 Years Experience';
        $Doctor->specialties = 'Neurology';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();


    }
}

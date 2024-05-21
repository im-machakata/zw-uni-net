<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::create([
            'location' => 'Masvingo',
            'name' => 'Great Zimbabwe University',
            'about' => 'Great Zimbabwe University (GZU) is a state university located in Masvingo, Zimbabwe. It was established in 1999 and is one of the largest universities in the country offering a wide range of undergraduate and postgraduate programs in fields such as agriculture, arts, commerce, education, law and social sciences.',
            'programs' => 'Accounting, Banking, Business Management, Development Studies, Economics, Education, English, Geography and Environmental Studies, Heritage Studies, History, Human Resources Management, Information Systems, Law, Marketing, Media and Society Studies, Music Business Studies, Peace and Governance, Religious Studies, Shona, Tourism and Hospitality Management, Translation Studies',
            'website' => 'https://www.gzu.ac.zw/',
            'contact_email' => 'info@gzu.ac.zw',
            'keywords' => 'GZU, Great Zimbabwe University, Masvingo, Zimbabwe',
            'application_url' => 'https://gzu.ac.zw/'
        ]);

        University::create([
            'location' => 'Masvingo',
            'name' => 'Midlands State University',
            'about' => 'Midlands State University is a private university in Masvingo, Zimbabwe. It was established in 1981 and is located in the city of Masvingo, Zimbabwe. Midlands State University is a private university in Masvingo, Zimbabwe. It was established in 1981 and is located in the city of Masvingo, Zimbabwe.',
            'programs' => 'Accounting, Business Management, Computer Science, Information Systems, Marketing, Operations Management, Human Resources Management, Banking and Finance, Economics',
            'website' => 'https://www.msu.ac.zw/',
            'contact_email' => 'admissions@msu.ac.zw',
            'keywords' => 'MSU, Masvingo, Zimbabwe, University',
            'application_url' => 'http://msu.ac.zw/apply'
        ]);

        University::create([
            'location' => 'Bulawayo',
            'name' => 'National University of Science and Technology',
            'about' => 'The National University of Science and Technology (NUST) is a public university located in Bulawayo, Zimbabwe. It was established in 1991 and focuses on science, technology, engineering, and mathematics (STEM) disciplines.',
            'programs' => 'Engineering, Applied Sciences, Commerce, Communication and Information Technology',
            'website' => 'https://www.nust.ac.zw/',
            'contact_email' => 'admissions@nust.ac.zw',
            'keywords' =>
            'NUST, Bulawayo, Zimbabwe, University, STEM',
            'application_url' => 'https://nust.ac.zw/'
        ]);

        University::create([
            'location' => 'Lupane',
            'name' => 'Lupane State University',
            'about' => 'Lupane State University is a public university located in Lupane, Zimbabwe. It was established in 2005 and offers programs in various fields, including agriculture, natural resources management, and education.',
            'programs' => 'Agriculture, Natural Resources Management, Education',
            'website' => 'https://www.lsu.ac.zw/',
            'contact_email' => 'info@lsu.ac.zw',
            'keywords' =>
            'LSU, Lupane, Zimbabwe, University',
            'application_url' => 'https://lsu.ac.zw/apply'
        ]);
    }
}

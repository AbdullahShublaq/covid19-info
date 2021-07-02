<?php

use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vaccines = [
            [
                'name' => 'AstraZeneca/Oxford vaccine',
                'info' => 'Updated on 17 March 2021 to reflect the fact that WHO has listed two versions of the AstraZeneca/Oxford COVID-19 vaccine for emergency use. A further update was made on 19 April 2021to reflect the latest WHO Global Advisory Committee on Vaccine Safety statement.

The WHO Strategic Advisory Group of Experts on Immunization (SAGE) has issued interim recommendations for use of the Oxford/AstraZeneca COVID-19 vaccine (AZD1222). ',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/the-oxford-astrazeneca-covid-19-vaccine-what-you-need-to-know'
            ],
            [
                'name' => 'Johnson and Johnson',
                'info' => 'The WHO Strategic Advisory Group of Experts (SAGE) on Immunisation has issued Interim recommendations for the use of the Janssen Ad26.CoV2.S vaccine against COVID-19.',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/the-j-j-covid-19-vaccine-what-you-need-to-know'
            ],
            [
                'name' => 'Moderna',
                'info' => 'The WHO Strategic Advisory Group of Experts (SAGE) on Immunization has issued Interim recommendations for use of the Moderna mRNA-1273 vaccine against COVID-19 in people aged 18 years and older.',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/the-moderna-covid-19-mrna-1273-vaccine-what-you-need-to-know'
            ],
            [
                'name' => 'Pfizer/BionTech',
                'info' => 'WHO’s Strategic Advisory Group of Experts on Immunization (SAGE) has issued its policy recommendations for the rollout of  the first COVID-19 vaccine approved for emergency use, the Pfizer-BioNTech COVID-19 vaccine.

According to SAGE, the Pfizer-BioNTech COVID-19 mRNA vaccine is safe and effective. The priority is to start vaccinating health workers at high risk of exposure, followed by older adults, before immunizing the rest of the population. ',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/who-can-take-the-pfizer-biontech-covid-19--vaccine'
            ],
            [
                'name' => 'Sinopharm',
                'info' => 'The WHO Strategic Advisory Group of Experts (SAGE) on Immunization has issued Interim recommendations for the use of the inactivated COVID-19 vaccine BIBP developed by Sinopharm/China National Pharmaceutical Group.',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/the-sinopharm-covid-19-vaccine-what-you-need-to-know'
            ],
            [
                'name' => 'Sinovac',
                'info' => 'The WHO Strategic Advisory Group of Experts (SAGE) on Immunization has issued Interim recommendations for the use of the inactivated COVID-19 vaccine, Sinovac-CoronaVac, developed by Sinovac/China National Pharmaceutical Group.',
                'link' => 'https://www.who.int/news-room/feature-stories/detail/the-sinovac-covid-19-vaccine-what-you-need-to-know'
            ],

        ];
        foreach ($vaccines as $vaccine) {
            \App\Vaccine::create($vaccine);
        }
    }
}

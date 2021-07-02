<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faqs = [
            [
                'title' => 'If I have already had COVID-19 and recovered, do I still need to get vaccinated with a COVID-19 vaccine?',
                'disc' => 'Yes, you should be vaccinated regardless of whether you already had COVID-19. That’s because experts do not yet know how long you are protected from getting sick again after recovering from COVID-19. Even if you have already recovered from COVID-19, it is possible—although rare—that you could be infected with the virus that causes COVID-19 again. Learn more about why getting vaccinated is a safer way to build protection than getting infected.

If you were treated for COVID-19 with monoclonal antibodies or convalescent plasma, you should wait 90 days before getting a COVID-19 vaccine. Talk to your doctor if you are unsure what treatments you received or if you have more questions about getting a COVID-19 vaccine.'
            ],
            [
                'title' => 'Is it safe for my child to get a COVID-19 vaccine?',
                'disc' => 'Yes. Studies show that COVID-19 vaccines are safe and effective. Like adults, children may have some side effects after COVID-19 vaccination. These side effects may affect their ability to do daily activities, but they should go away in a few days. Children 12 years and older are now eligible to get vaccinated against COVID-19. COVID-19 vaccines have been used under the most intensive safety monitoring in U.S. history, including studies in children 12 years and older. Your child cannot get COVID-19 from any COVID-19 vaccine.'
            ],
            [
                'title' => 'Why should my child get vaccinated against COVID-19?',
                'disc' => 'COVID-19 vaccination can help protect your child from getting COVID-19. Although fewer children have been sick with COVID-19 compared to adults, children can be infected with the virus that causes COVID-19, can get sick from COVID-19, and can spread the virus that causes COVID-19 to others. Getting your child vaccinated helps to protect your child and your family. Vaccination is now recommended for everyone 12 years and older. Currently, the Pfizer-BioNTech COVID-19 Vaccine is the only one available to children 12 years and older.'
            ],
            [
                'title' => 'What is the update on the Johnson & Johnson’s Janssen COVID-19 Vaccine?',
                'disc' => 'CDC and FDA have recommended that use of Johnson & Johnson’s Janssen (J&J/Janssen) COVID-19 Vaccine resume in the United States, effective April 23, 2021. However, women younger than 50 years old especially should be aware of the rare risk of blood clots with low platelets after vaccination, and that other COVID-19 vaccines are available where this risk has not been seen. If you received a J&J/Janssen vaccine, here is what you need to know. Read the CDC/FDA statement.'
            ],
            [
                'title' => 'Do I need to wear a mask and avoid close contact with others if I am fully vaccinated?',
                'disc' => 'No. Fully vaccinated people can resume activities without wearing a mask or physically distancing, except where required by federal, state, local, tribal, or territorial laws, rules, and regulations, including local business and workplace guidance. If you are fully vaccinated, you can resume activities that you did before the pandemic.'
            ],
            [
                'title' => 'Can I choose which COVID-19 vaccine I get?',
                'disc' => 'Yes. All currently authorized and recommended COVID-19 vaccines are safe and effective, and CDC does not recommend one vaccine over another. The most important decision is to get a COVID-19 vaccination as soon as possible. Widespread vaccination is a critical tool to help stop the pandemic.

People should be aware that a risk of a rare condition called thrombosis with thrombocytopenia syndrome (TTS) has been reported following vaccination with the J&J/Janssen COVID-19 Vaccine. TTS is a serious condition that involves blood clots with low platelet counts. This problem is rare, and most reports were in women between 18 and 49 years old. For women 50 years and older and men of any age, this problem is even more rare. There are other COVID-19 vaccine options available for which this risk has not been seen (Pfizer-BioNTech, Moderna).'
            ],
            [
                'title' => 'What are the most common side effects after getting a COVID-19 vaccine?',
                'disc' => 'After getting vaccinated, you might have some side effects, which are normal signs that your body is building protection. Common side effects are pain, redness, and swelling in the arm where you received the shot, as well as tiredness, headache, muscle pain, chills, fever, and nausea throughout the rest of the body. These side effects could affect your ability to do daily activities, but they should go away in a few days. Learn more about what to expect after getting a COVID-19 vaccine.'
            ],
            [
                'title' => 'If I am pregnant, can I get a COVID-19 vaccine?',
                'disc' => 'Yes, if you are pregnant, you can receive a COVID-19 vaccine.

You might want to have a conversation with your healthcare provider to help you decide whether to get vaccinated. While such a conversation might be helpful, it is not required before vaccination. Learn more about vaccination considerations for people who are pregnant or breastfeeding.

If you are pregnant and have received a COVID-19 vaccine, we encourage you to enroll in v-safe, CDC’s smartphone-based tool that provides personalized health check-ins after vaccination. A v-safe pregnancy registry has been established to gather information on the health of pregnant people who have received a COVID-19 vaccine.'
            ],
            [
                'title' => 'How long does protection from a COVID-19 vaccine last?',
                'disc' => 'We don’t know how long protection lasts for those who are vaccinated. What we do know is that COVID-19 has caused very serious illness and death for a lot of people. If you get COVID-19, you also risk giving it to loved ones who may get very sick. Getting a COVID-19 vaccine is a safer choice.

Experts are working to learn more about both natural immunity and vaccine-induced immunity. CDC will keep the public informed as new evidence becomes available.'
            ],
            [
                'title' => 'How many doses of COVID-19 vaccine will I need to get?',
                'disc' => 'The number of doses needed depends on which vaccine you receive. To get the most protection:

Two Pfizer-BioNTech vaccine doses should be given 3 weeks (21 days) apart.
Two Moderna vaccine doses should be given 1 month (28 days) apart.
Johnson & Johnsons Jansen (J&J/Janssen) COVID-19 vaccine requires only one dose.
If you receive a vaccine that requires two doses, you should get your second shot as close to the recommended interval as possible. However, your second dose may be given up to 6 weeks (42 days) after the first dose, if necessary.. You should not get the second dose earlier than the recommended interval.'
            ],
            [
                'title' => 'If I have an underlying condition, can I get a COVID-19 vaccine?',
                'disc' => 'People with underlying medical conditions can receive a COVID-19 vaccine as long as they have not had an immediate or severe allergic reaction to a COVID-19 vaccine or to any of the ingredients in the vaccine. Learn more about vaccination considerations for people with underlying medical conditions. Vaccination is an important consideration for adults of any age with certain underlying medical conditions because they are at increased risk for severe illness from COVID-19.'
            ],
            [
                'title' => 'Can I get vaccinated against COVID-19 while I am currently sick with COVID-19?',
                'disc' => 'No. People with COVID-19 who have symptoms should wait to be vaccinated until they have recovered from their illness and have met the criteria for discontinuing isolation; those without symptoms should also wait until they meet the criteria before getting vaccinated. This guidance also applies to people who get COVID-19 before getting their second dose of vaccine.'
            ]
        ];
        foreach ($faqs as $faq) {
            \App\Faq::create($faq);
        }
    }
}

<template>
  <Header />
  <div class="home">
    <div class="promo">
            <img src="@/assets/images/map.jpg" alt="map">
            <h1>MÉDECINS SANS FRONTIÈRES</h1>
            <h2>DON'T NEED BORDERS TO SAVE LIVES</h2>
            <button type="button">DONATE</button>
    </div>

    <div>
            <h3>WHO IS MSF?</h3>
            <p>Médecins Sans Frontières/Doctors Without Borders  (MSF) translates to Doctors
                 without Borders. We provide medical assistance to people affected by conflict,
                 epidemics, disasters, or exclusion from healthcare. Our teams are made up of
                 tens of thousands of health professionals, logistic and administrative staff
                 bound together by our charter. Our actions are guided by medical ethics and
                 the principles of impartiality, independence and neutrality.
                 We are a non-profit, self-governed, member-based organisation.</p>
            <!--<video src="@/assets/images/"></video>-->
    </div>

    <div class="principles">
            <h3>Our working principles</h3>
            <div>
                <h4>1. Impartial</h4>
                <p>We provide free medical care to people who need it.
                     It doesn't matter which country they are from,
                     which religion they belong to, or what their political affiliations are.
                     All that matters is they are human beings in need.</p>
            </div>

            <div>
                <h4>2. Neutral</h4>
                <p>In a conflict situation, we don't take sides,
                     but go where people's medical needs are greatest.
                     In the ward of one of our field hospitals, you might find
                     wounded civilians alongside injured soldiers from opposing sides.
                     Hostilities and weapons must be left at the gate.</p>
            </div>

            <div>
                <h4>3. Independent</h4>
                <p>We rarely take funds from governments or public funds for our work.
                     We rely on private donations, mainly from individual members
                     of the public. Over 90 percent of our income comes from private donors.</p>
            </div>

            <div>
                <h4>4. Medical ethics</h4>
                <p>MSF's actions are first and foremost medical.
                     Quality medical care for the individual patient is central
                     to our humanitarian objective. We seek to provide high-quality
                     care and to act always in the best interest of patients;
                     to respect their confidentiality, their right to make their
                     own decisions and above all, to do them no harm. When medical
                     assistance alone is not enough, we may provide shelter,
                     water and sanitation, food or other services.</p>
            </div>
    </div>

    <div class="statistics">
            <h3>CLEAR RESULTS with 2020</h3>
            <div class="numbers">
                <div>
                    <b>88</b>
                    <p>COUTRIES</p>
                </div>
                <div>
                    <b>3,210,000</b>
                    <p>COVID-19 test</p>
                </div>
                <div>
                    <b>302</b>
                    <p>COVID-19 response activities</p>
                </div>
                <div>
                    <b>112,000</b>
                    <p>Outpatient treatment for suspected COVID-19 patients</p>
                </div>
            </div>

            <div class="graphs">
                <div class="incomes">
                    <h5>INCOMES</h5>
                    <div class="bold">
                        <p>MSF Canada Private Sponsorship Income in 2020</p></div>
                    <div class="pie_chart">
                        <img src="@/assets/images/graph_incomes.svg" alt="graph_incomes">
                        <h6>More than 90% are sponsored by the private donation</h6>
                        <svg height="100" width="100">
                            <circle cx="50" cy="50" r="40" fill="#EE0000" />
                        </svg>
                        <p>Private income</p>
                        <svg height="100" width="100">
                            <circle cx="50" cy="50" r="40" fill="#14274F" />
                        </svg>
                        <p>Corporate</p>
                    </div>
                    <img src="@/assets/images/table_incomes.png" alt="table_incomes">
                </div>

                <div class="expenses">
                    <h5>EXPENSES</h5>
                    <div class="bold">
                        <p>MSF Canada Private Sponsorship Expenditure in 2020</p></div>
                    <div class="pie_chart">
                        <img src="@/assets/images/graph_expenses.svg" alt="graph_expenses">
                        <h6>Can you believe? Small sharing leads to this result</h6>
                        <svg height="100" width="100">
                            <circle cx="50" cy="50" r="40" fill="#14274F" />
                        </svg>
                        <p>Relief programs</p>
                        <svg height="100" width="100">
                            <circle cx="50" cy="50" r="40" fill="#EE0000" />
                        </svg>
                        <p>Fundraising</p>
                        <svg height="100" width="100">
                            <circle cx="50" cy="50" r="40" fill="#D1D1D1" />
                        </svg>
                        <p>General overhead expenses</p>
                    </div>
                    <img src="@/assets/images/table_expenses.png" alt="table_expenses">
                </div>
            </div>
    </div>

    <div class="donation">
            <h3>HOW YOUR DONATIONS ARE USED</h3>
            <p>Your donations pay for millions of consultations, surgeries,
                 treatments and vaccinations every year.</p>

            <div class="numbers">
                <div>
                    <b>9,904,200</b>
                    <p>OUTPATIENT CONSULTATIONS</p>
                </div>
                <div>
                    <b>1,008,500</b>
                    <p>VACCINATIONS AGAINST MEASLES IN RESPONSE TO AN OUTBREAK</p>
                </div>
                <div>
                    <b>877,300</b>
                    <p>PATIENTS ADMITTED</p>
                </div>
            </div>
            <button>DONATE</button>
    </div>

    <div class="onnline_offline">
            <div>
                <h1>ONLINE</h1>
                <!--Don't forget to add on styles font-sixe 11, bold-->
                <b>It takes less than 5 seconds to donate using the QR code.
                     Meet MSF on your way to work.</b>
                <button>ABOUT</button>
            </div>
            <div>
                <h1>OFFLINE</h1>
                <!--Don't forget to add on styles font-sixe 11, bold-->
                <b>Use the online form to apply for volunteer work.
                     We're always waiting for you.</b>
                <button>CONTACT</button>
            </div>
    </div>
  </div>
  <Footer />
</template>

<script>
// @ is an alias to /src
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'Home',
  components: {
    Header,
    Footer,
  },
};
</script>

<style lang="scss">
 @import "src/assets/sass/home.scss";
</style>

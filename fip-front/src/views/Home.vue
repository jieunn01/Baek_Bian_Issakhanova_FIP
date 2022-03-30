<template>
  <Header />
  <div class="container">
    <div class="promo" :style="promo">
            <div class="promo_text">
                <h1>MÉDECINS SANS FRONTIÈRES</h1>
                <h2>DON'T NEED BORDERS TO SAVE LIVES</h2>
                <button type="button">DONATE</button>
            </div>
    </div>

    <div class="MSF">
            <h3>WHO IS <span>MSF?</span></h3>
            <div class="MSF_content">
            <p>Médecins Sans Frontières/Doctors Without Borders  (MSF) translates to Doctors
                 without Borders. We provide medical assistance to people affected by conflict,
                 epidemics, disasters, or exclusion from healthcare. Our teams are made up of
                 tens of thousands of health professionals, logistic and administrative staff
                 bound together by our charter. Our actions are guided by medical ethics and
                 the principles of impartiality, independence and neutrality.
                 We are a non-profit, self-governed, member-based organisation.</p>

                <video id="videoPromo" src="@/assets/images/fip_video.mp4" controls="controls">
                </video>
            </div>
    </div>

    <div class="principles">
            <h3>OUR WORKING PRINCIPLES</h3>
            <div class="principles_content">
            <div class="principles_desc">
                <h4>1. IMPARTIAL</h4>
                <p>We provide free medical care to people who need it.
                     It doesn't matter which country they are from,
                     which religion they belong to, or what their political affiliations are.
                     All that matters is they are human beings in need.</p>
            </div>

            <div class="principles_desc">
                <h4>2. NEUTRAL</h4>
                <p>In a conflict situation, we don't take sides,
                     but go where people's medical needs are greatest.
                     In the ward of one of our field hospitals, you might find
                     wounded civilians alongside injured soldiers from opposing sides.
                     Hostilities and weapons must be left at the gate.</p>
            </div>
            </div>

            <div class="principles_content">
            <div class="principles_desc">
                <h4>3. INDEPENDENT</h4>
                <p>We rarely take funds from governments or public funds for our work.
                     We rely on private donations, mainly from individual members
                     of the public. Over 90 percent of our income comes from private donors.</p>
            </div>

            <div class="principles_desc">
                <h4>4. MEDICAL ETHICS</h4>
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
    </div>

    <div class="statistics">
            <h3>CLEAR RESULTS with 2020</h3>
            <div class="numbers">
                <div class="numbers_content">
                    <b>88</b>
                    <p>COUTRIES</p>
                </div>
                <div class="numbers_content">
                    <b>3,210,000</b>
                    <p>COVID-19 TEST</p>
                </div>
                <div class="numbers_content">
                    <b>302</b>
                    <p>COVID-19 RESPONSE ACTIVITIES</p>
                </div>
                <div class="numbers_content">
                    <b>112,000</b>
                    <p>OUTPATIENT TREATMENT FOR SUSPECTED COVID-19 PATIENTS</p>
                </div>
            </div>

            <div class="graphs">
                <div class="incomes">
                    <h5>INCOMES</h5>
                    <p>MSF Canada Private Sponsorship Income in 2020</p>
                    <div class="pie_chart">
                        <img src="@/assets/images/graph_incomes.svg" alt="graph_incomes">
                        <div>
                        <h5>More than <span>90%</span> are sponsored by the private donation</h5>
                            <div class="graphs_info">
                                <svg x="0px" y="0px" viewBox="0 0 15 15">
                                <circle class="st0" cx="7.5" cy="7.5" r="7.5" fill="#EE0000"/>
                                </svg>
                                <p>Private income</p>
                            </div>

                            <div class="graphs_info">
                                <svg x="0px" y="0px" viewBox="0 0 15 15">
                                <circle class="st0" cx="7.5" cy="7.5" r="7.5" fill="#14274F"/>
                                </svg>
                            <p>Corporate</p>
                            </div>
                        </div>
                    </div>
                    <img class="table" src="@/assets/images/table_incomes.png" alt="table_incomes">
                </div>

                <div class="expenses">
                    <h5>EXPENSES</h5>
                    <p>MSF Canada Private Sponsorship Expenditure in 2020</p>
                    <div class="pie_chart">
                        <img src="@/assets/images/graph_expenses.svg" alt="graph_expenses">
                        <div>
                        <h5>Can you believe? Small sharing leads to this result</h5>
                        <div class="graphs_info">
                            <svg x="0px" y="0px" viewBox="0 0 15 15">
                            <circle class="st0" cx="7.5" cy="7.5" r="7.5" fill="#14274F"/>
                            </svg>
                            <p>Relief programs</p>
                        </div>

                        <div class="graphs_info">
                            <svg x="0px" y="0px" viewBox="0 0 15 15">
                            <circle class="st0" cx="7.5" cy="7.5" r="7.5" fill="#EE0000"/>
                            </svg>
                            <p>Fundraising</p>
                        </div>

                        <div class="graphs_info">
                            <svg x="0px" y="0px" viewBox="0 0 15 15">
                            <circle class="st0" cx="7.5" cy="7.5" r="7.5" fill="#D1D1D1"/>
                            </svg>
                            <p>General overhead expenses</p>
                        </div>
                        </div>
                    </div>
                <img class="table" src="@/assets/images/table_expenses.png" alt="table_expenses">
                </div>
            </div>
    </div>

    <div class="donation">
            <h3>HOW YOUR DONATIONS ARE USED</h3>
            <p>Your donations pay for millions of consultations, surgeries,
                 treatments and vaccinations every year.</p>

            <div class="numbers">
                <div class="numbers_content">
                    <b>9,904,200</b>
                    <p>OUTPATIENT CONSULTATIONS</p>
                </div>
                <div class="numbers_content">
                    <b>1,008,500</b>
                    <p>VACCINATIONS AGAINST MEASLES IN RESPONSE TO AN OUTBREAK</p>
                </div>
                <div class="numbers_content">
                    <b>877,300</b>
                    <p>PATIENTS ADMITTED</p>
                </div>
            </div>
            <button>DONATE</button>
    </div>

    <div class="banner" :style="banner">
                <div class="online">
                <h1>ONLINE</h1>
                <!--Don't forget to add on styles font-sixe 11, bold-->
                <b>It takes less than 5 seconds to donate using the QR code.
                     Meet MSF on your way to work.</b>
                <button>ABOUT</button>
                </div>
                <div class="offline">
                <h1>OFFLINE</h1>
                <!--Don't forget to add on styles font-sixe 11, bold (desktop20)-->
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

  data() {
    return {
      banner: { backgroundImage: 'url(https://i.ibb.co/p4vQn4y/banner.png)' },
      promo: { backgroundImage: 'url(https://i.ibb.co/pv8JZYz/map.jpg)' },
    };
  },
};
</script>

<style lang="scss">
 @import "src/assets/sass/main.scss";
</style>

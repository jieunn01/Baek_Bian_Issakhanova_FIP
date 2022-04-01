<template>
<Header />
<div>
  <section class="mapWrap">
    <h2 class="title">
      <span class="material-icons"> hearing </span>DO YOU NEED MORE INFORMATION?
    </h2>
    <CustomGoogleMap
      :class="''"
      :style="''"
      :center="{ lat: 43.6446073, lng: -79.4027531 }"
      :apiKey="this.apiKey"
      :textset="[
        '551 Adelaide Street West, Toronto, Ontario, Canada M5V 0N8',
        'tel: +1(800)972-7903',
        'Mon-Fri 10:00am to 6:00pm',
        'Charitable registration # : 13527 5857 RR0001',
      ]"
    />
  </section>
  <section class="formWrap">
    <h2 class="title">
      <span class="material-icons"> volunteer_activism </span>ARE YOU INTERESTED IN VOLUNTEER WORK?
    </h2>
    <div class="contents">
      <div class="paragraphWrap">
        <p>Welcome to MSF!</p>
        <p>We were waiting for your participation.</p>
        <p>Many parts of the world need people’s touch.</p>
        <p>Please tell us your story. We reply within two business days.</p>
        <p>We are looking forward to see you soon.</p>
      </div>
      <div class="contactFormWrap">
        <h3 class="formTitle">CONTACT FORM</h3>
        <form class="contactForm" v-on:submit="onSubmit">
          <div class="formRow">
            <div class="formLabel">First Name</div>
            <div class="formText">
              <input
                class="formInput"
                v-model="this.formData.firstName"
                name="firstName"
                type="text"
              />
            </div>
          </div>
          <div class="formRow">
            <div class="formLabel">Last Name</div>
            <div class="formText">
              <input
                class="formInput"
                v-model="this.formData.lastName"
                name="lastName"
                type="text"
              />
            </div>
          </div>
          <div class="formRow">
            <div class="formLabel">Email Address</div>
            <div class="formText">
              <input class="formInput" v-model="this.formData.email" name="email" type="email" />
            </div>
          </div>
          <div class="formRow">
            <div class="formLabel">Phone number</div>
            <div class="formText">
              <input
                class="formInput"
                placeholder="000-0000-0000"
                v-model="this.formData.phone"
                name="phone"
                type="phone"
              />
            </div>
          </div>
          <div class="formRow">
            <div class="formLabel">Location</div>
            <div class="formText">
              <input
                class="formInput"
                v-model="this.formData.location"
                name="location"
                type="text"
              />
            </div>
          </div>
          <div class="formRow">
            <div class="formLabel">Position</div>
            <div class="formText">
              <input
                class="formInput"
                v-model="this.formData.position"
                name="position"
                type="text"
              />
            </div>
          </div>
          <div class="formRow textareaWrap">
            <div class="formLabel">Message</div>
            <div class="formText">
              <textarea class="formInput textarea" v-model="this.formData.message" name="message" />
            </div>
          </div>
          <div class="formRow submitWrap">
            <button class="submitBtn" type="submit">Apply</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<Footer />
</template>
<script>
// @ is an alias to /src
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'Contact',
  components: {
    Header,
    Footer,
  },
};
</script>

<style lang="scss">
 @import "src/assets/sass/main.scss";
</style>

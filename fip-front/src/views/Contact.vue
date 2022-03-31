<template>
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
</template>
<script>
// @ is an alias to /src
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
import CustomGoogleMap from '../components/CustomGoogleMap.vue';
import MapConfig from '../map.config';

export default {
  name: 'Contact',
  data() {
    return {
      apiKey: MapConfig.KEY,
      formData: {
        firstName: '',
        lastName: '',
        email: '',
        phone: '',
        location: '',
        position: '',
        message: '',
      },
    };
  },
  methods: {
    onSubmit(event) {
      // form submit refresh prevent
      event.preventDefault();

      // validation check,
      // [ js for in ] , [ js email regex ], [ js phone regex ]
      for (const key in this.formData) {
        // console.log("this.formData[key]", key, this.formData[key]);
        if (this.formData[key] === '') {
          alert(`${key} is empty.`);
          return;
        }
        if (key === 'email') {
          const regex = new RegExp(
            /^([\w\\.\\_\\-])*[a-zA-Z0-9]+([\w\\.\\_\\-])*([a-zA-Z0-9])+([\w\\.\\_\\-])+@([a-zA-Z0-9]+\.)+[a-zA-Z0-9]{2,8}$/,
          );
          if (!regex.test(this.formData[key])) {
            alert('email is invalid.');
            return;
          }
        }
        if (key === 'phone') {
          const regex = new RegExp(/^\d{3}-\d{3,4}-\d{4}$/);
          if (!regex.test(this.formData[key])) {
            alert('phone number is invalid.');
            return;
          }
        }
      }

      // Create formData

      const reqFormData = new FormData();
      for (const key in this.formData) {
        reqFormData.append(key, this.formData[key]);
      }

      fetch('https://localhost:8080/includes/send.php', {
        method: 'POST',
        body: reqFormData,
      })
        .then((res) => res.json())
        .then((res) => {
          console.log('res', res);
        });
    },
  },
  components: {
    Header,
    Footer,
    CustomGoogleMap,
  },
};
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Red+Hat+Display&display=swap');

.title {
  font-family: 'Merienda', Arial, sans-serif;
  padding-left: 6%;
  padding-right: 6%;
  margin-bottom: 24px;
  height: 30px;
  display: flex;
  align-items: center;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.5;
  span {
    margin-right: 5px;
  }
}
.formWrap {
  margin-top: 40px;
  .title {
    align-items: flex-start;
  }
  .contents {
    font-family: 'Red Hat Display', Arial,sans-serif;
    padding-left: 6%;
    padding-right: 6%;
    margin-bottom: 4rem;
    display: flex;
    flex-direction: column;
    .paragraphWrap {
      line-height: 1.5;
    }
    .contactFormWrap {
      margin-top: 27px;
      .formTitle {
        font-weight: 700;
        margin-bottom: 27px;
      }
      .contactForm {
        display: flex;
        flex-direction: column;
        gap: 20px;
        .formRow {
          display: flex;
          height: 40px;
          align-items: center;
          .formLabel {
            width: 120px;
            height: 100%;
            display: flex;
            align-items: center;
          }
          .formText {
            width: calc(100% - 120px);
            height: 100%;
            display: flex;
            align-items: center;
            .formInput {
              width: 100%;
              height: 30px;
              padding-left: 1em;
              padding-right: 1em;
              outline: none;
              border: 2px solid black;
              border-radius: 20px;

              &.textarea {
                font-family: 'Red Hat Display', Arial, sans-serif;
                resize: none;
                height: 140px;
                padding-top: 1em;
              }
            }
          }
          &.textareaWrap {
            height: 150px;
            .formLabel {
              align-items: flex-start;
            }
          }
          &.submitWrap {
            justify-content: flex-end;
            .submitBtn {
              padding: 7px 25px;
              outline: none;
              background: rgb(27, 40, 77);
              border: 1px solid transparent;
              border-radius: 20px;
              color: #fff;
              transition: 0.3s;
              cursor: pointer;

              &:hover {
                background: #fff;
                color: rgb(27, 40, 77);
                border: 1px solid rgb(27, 40, 77);
              }
            }
          }
        }
      }
    }
  }
}

@media screen and(min-width: 1280px) {
  .title {
    padding-left: 10%;
    padding-right: 10%;
    font-size: 26px;
  }
  .formWrap {
    margin-top: 40px;
    font-size: 18px;
    .title {
      align-items: flex-start;
    }
    .contents {
      padding-left: 10%;
      padding-right: 10%;
      flex-direction: row;
      .paragraphWrap {
        flex: 1;
      }
      .contactFormWrap {
        flex: 1;
        .formTitle {
          font-size: 26px;
        }
        .contactForm {
          .formRow {
            height: 50px;
            .formLabel {
              width: 200px;
              height: 100%;
              display: flex;
              align-items: center;
            }
            .formText {
              width: calc(100% - 200px);
              height: 100%;
              display: flex;
              align-items: center;
              .formInput {
                width: 100%;
                height: 45px;
                outline: none;
                border: 2px solid black;
                border-radius: 20px;
                font-size: 18px;

                &.textarea {
                  resize: none;
                  height: 160px;
                }
              }
            }
            &.textareaWrap {
              height: 180px;
            }
            &.submitWrap {
              justify-content: flex-end;
              .submitBtn {
                font-size: 20px;
                padding: 8px 40px;
              }
            }
          }
        }
      }
    }
  }
}
</style>

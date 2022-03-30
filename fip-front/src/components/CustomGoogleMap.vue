<template>
  <section class="mapSection" :class="this.class" :style="this.style">
    <GoogleMap
      :api-key="this.apiKey"
      :center="this.center"
      region="KR"
      class="map"
      :zoom="17"
      :disableDefaultUi="true"
    >
      <Marker :options="{ position: center }" />
    </GoogleMap>
    <ul class="inform">
      <li v-for="text in this.textset" :key="text">{{ text }}</li>
    </ul>
  </section>
</template>

<script>
import { GoogleMap, Marker } from 'vue3-google-map';

export default {
  name: 'CustomGoogleMap',
  data() {
    return {
      //     class: "",
      //     style: "",
      //     center: {
      //       lat: 43.6446073,
      //       lng: -79.4027531,
      //     },
      //     textset: [
      //       " 551 Adelaide Street West, Toronto, Ontario, Canada M5V 0N8",
      //       "tel: +1(800)972-7903",
      //       "Mon-Fri 10:00am to 6:00pm",
      //       "Charitable registration # : 13527 5857 RR0001",
      //     ],
    };
  },
  props: {
    class: String,
    style: String,
    center: Object,
    apiKey: String,
    textset: Object,
  },
  components: {
    GoogleMap,
    Marker,
  },
};
</script>

<style lang="scss" scoped>
.mapSection {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-left: 6%;
  padding-right: 6%;
  width: 100%;
  gap: 20px;
  .map {
    width: 100%;
    height: 200px;
  }
  .inform {
    width: 100%;
    display: flex;
    flex-direction: column;
    list-style-type: none;
    li {
      font-size: 14px;
      line-height: 1.5;
    }
  }
}
@media screen and (min-width: 1280px) {
  .mapSection {
    flex-direction: row;
    justify-content: space-between;
    padding: 0 10%;
    gap: 10%;
    .map {
      min-width: 494px;
      width: 100%;
      min-height: 233px;
    }
    .inform {
      width: auto;
      li {
        font-size: 18px;
      }
    }
  }
}
</style>

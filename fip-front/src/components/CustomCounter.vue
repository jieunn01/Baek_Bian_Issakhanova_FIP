<template>
  <section class="CounterWrap">
    <h3 class="title">{{ this.title }}</h3>
    <p v-if="this.paragraph !== ''" class="paragraph">{{ this.paragraph }}</p>
    <div class="valuesWrap">
      <IncreaseCounter
        class="counter"
        v-for="item in values"
        :key="item"
        :value="item.value"
        :text="item.text"
      >
      </IncreaseCounter>
    </div>
  </section>
</template>

<script>
import IncreaseCounter from "./IncreaseCounter.vue";
export default {
  name: "CustomCounter",
  props: {
    title: String,
    paragraph: String,
    values: Object, // [{value, text},...]
  },
  components: {
    IncreaseCounter,
  },
};
</script>

<style lang="scss" scoped>
.CounterWrap {
  display: flex;
  flex-direction: column;
  align-content: center;
  gap: 24px;
  padding: 0 6%;
  .title {
    font-size: 16px;
    font-weight: 700;
    line-height: 1.5;
  }
  .paragraph {
    font-size: 14px;
    line-height: 1.5;
  }
  .valuesWrap {
    display: flex;
    flex-direction: column;
    gap: 26px;
    .counter {
      width: 325px;
      height: 130px;
      margin: 0 auto;
    }
  }
}

@media screen and(min-width: 1280px) {
  .CounterWrap {
    display: flex;
    flex-direction: column;
    gap: 30px;
    padding: 0 10%;
    .title {
      font-size: 26px;
    }
    .paragraph {
      font-size: 16px;
    }
    .valuesWrap {
      flex-direction: row;
    }
  }
}
</style>

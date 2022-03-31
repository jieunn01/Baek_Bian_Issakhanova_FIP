<template>
  <div class="item">
    <div class="value">{{ this.currentValue.toLocaleString() }}</div>
    <div class="text">{{ this.text }}</div>
  </div>
</template>

<script>
export default {
  name: "IncreaseCounter",
  data() {
    return {
      currentValue: 0,
      timer: null,
      speed: 87,
    };
  },
  mounted() {
    console.log("mounted", this.value, this.text);
    this.updateCount();
  },
  updated() {
    if (this.currentValue === this.value) {
      clearTimeout(this.counter);
    }
  },
  props: {
    value: Number,
    text: String,
  },
  methods: {
    updateCount() {
      const increment = Math.trunc(this.value / this.speed);
      console.log(increment);

      if (this.currentValue < this.value) {
        this.currentValue = this.currentValue + increment;
        setTimeout(this.updateCount, 1);
      } else {
        this.currentValue = this.value;
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
  text-align: center;
  gap: 16px;

  .value {
    font-size: 40px;
    font-weight: 700;
    height: 50%;
    line-height: 1.5;
  }
  .text {
    height: 50%;
    font-size: 18px;
    line-height: 1.5;
  }
}
</style>

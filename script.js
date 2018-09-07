new Vue({
  el: '#app',
  data: {
    visible: false,
    activeIndex: 1,
    input5: '',
  },
  methods: {
    show: function () {
        this.visible = true;
    },
    handleSelect(key, keyPath) {
      console.log(key, keyPath);
    },
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },
    handleClose(key, keyPath) {
      console.log(key, keyPath);
    }
  }
})
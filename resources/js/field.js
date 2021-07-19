Nova.booting((Vue, router, store) => {
  Vue.component('index-laracash-nova-field', require('./components/IndexField'))
  Vue.component('detail-laracash-nova-field', require('./components/DetailField'))
  Vue.component('form-laracash-nova-field', require('./components/FormField'))
})

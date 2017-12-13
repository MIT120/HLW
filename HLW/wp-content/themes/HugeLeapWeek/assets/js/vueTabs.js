var tabs = Vue.component('tabs',{

     template:  '<div class="container">'+
                 '<div class="tabs is-centered is-boxed is-medium">'+
                   '<ul>'+
                     `<li v-for="tab in tabs" :class="{ 'is-active': tab.isActive}">`+
                       '<a :href="tab.href" @click="selectTab(tab)">'+
                         '<span class="icon is-small"><i class="fa fa-calendar"></i></span>'+
                         '<span>{{tab.name}}</span>'+
                       '</a>'+
                     '</li>'+
                   '</ul>'+
                 '</div>'+
                 `
                 <div class="tabs-details">
                <slot></slot>
                </div>
                 `+
               '</div>'
               ,
    mounted() {
      console.log(this.$children);
    }
    ,
    data() {
      return {tabs: []};
    }
    ,
    created() {
       this.tabs = this.$children;
    },
    methods: {
      selectTab(selectedTab){
        this.tabs.forEach(tab => {
           tab.isActive = (tab.name == selectedTab.name);
        });
      }

    }
});

var tab = Vue.component('tab',{
  template: `
  <div v-show="isActive"><slot></slot></div>
  `,
  props: {
    name: { required: true },
    selected: { default: false }
  },
  computed: {
    href() {
      return '#' + this.name.toLowerCase().replace(/ /g, '-');
    }
  },
  data() {
    return {
      isActive: false,
      tab: []
    };
  },
  created() {
     this.tab = this.$children;
  },
  methods: {
    selectCard(selectedCard){
      this.tab.forEach(card => {
         card.isActive = (card.name == selectedCard.name);
      });
    }

  },
  mounted() {
    this.isActive = this.selected;
    console.log(this.$children);
  }
});

new Vue({
    el: '#root',
});

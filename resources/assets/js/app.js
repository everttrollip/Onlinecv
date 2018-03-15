
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import vueResource from 'vue-resource';

window.Vue = require('vue');

/* Validation using vee-validate */
import Vue from 'vue';
import VeeValidate from 'vee-validate';

/* File upload */
const VueUploadComponent = require('vue-upload-component')
Vue.component('file-upload', VueUploadComponent)

Vue.use(VeeValidate);

//Element UI
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

import {
    Pagination,
    Dialog,
    Autocomplete,
    Dropdown,
    DropdownMenu,
    DropdownItem,
    Menu,
    Submenu,
    MenuItem,
    MenuItemGroup,
    Input,
    InputNumber,
    Radio,
    RadioGroup,
    RadioButton,
    Checkbox,
    CheckboxButton,
    CheckboxGroup,
    Switch,
    Select,
    Option,
    OptionGroup,
    Button,
    ButtonGroup,
    Table,
    TableColumn,
    DatePicker,
    TimeSelect,
    TimePicker,
    Popover,
    Tooltip,
    Breadcrumb,
    BreadcrumbItem,
    Form,
    FormItem,
    Tabs,
    TabPane,
    Tag,
    Tree,
    Alert,
    Slider,
    Icon,
    Row,
    Col,
    Upload,
    Progress,
    Badge,
    Card,
    Rate,
    Steps,
    Step,
    Carousel,
    CarouselItem,
    Collapse,
    CollapseItem,
    Cascader,
    ColorPicker,
    Transfer,
    Container,
    Header,
    Aside,
    Main,
    Footer,
    Loading,
    MessageBox,
    Message,
    Notification
  } from 'element-ui';

  Vue.use(Pagination);
  Vue.use(Dialog);
  Vue.use(Autocomplete);
  Vue.use(Dropdown);
  Vue.use(DropdownMenu);
  Vue.use(DropdownItem);
  Vue.use(Menu);
  Vue.use(Submenu);
  Vue.use(MenuItem);
  Vue.use(MenuItemGroup);
  Vue.use(Input);
  Vue.use(InputNumber);
  Vue.use(Radio);
  Vue.use(RadioGroup);
  Vue.use(RadioButton);
  Vue.use(Checkbox);
  Vue.use(CheckboxButton);
  Vue.use(CheckboxGroup);
  Vue.use(Switch);
  Vue.use(Select);
  Vue.use(Option);
  Vue.use(OptionGroup);
  Vue.use(Button);
  Vue.use(ButtonGroup);
  Vue.use(Table);
  Vue.use(TableColumn);
  Vue.use(DatePicker);
  Vue.use(TimeSelect);
  Vue.use(TimePicker);
  Vue.use(Popover);
  Vue.use(Tooltip);
  Vue.use(Breadcrumb);
  Vue.use(BreadcrumbItem);
  Vue.use(Form);
  Vue.use(FormItem);
  Vue.use(Tabs);
  Vue.use(TabPane);
  Vue.use(Tag);
  Vue.use(Tree);
  Vue.use(Alert);
  Vue.use(Slider);
  Vue.use(Icon);
  Vue.use(Row);
  Vue.use(Col);
  Vue.use(Upload);
  Vue.use(Progress);
  Vue.use(Badge);
  Vue.use(Card);
  Vue.use(Rate);
  Vue.use(Steps);
  Vue.use(Step);
  Vue.use(Carousel);
  Vue.use(CarouselItem);
  Vue.use(Collapse);
  Vue.use(CollapseItem);
  Vue.use(Cascader);
  Vue.use(ColorPicker);
  Vue.use(Container);
  Vue.use(Header);
  Vue.use(Aside);
  Vue.use(Main);
  Vue.use(Footer);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(vueResource);

Vue.component('example', require('./components/Example.vue'));
Vue.component('register', require('./components/Register.vue'));

//ADMINISTRATOR COMPONENTS
Vue.component('admin-profile', require('./components/administrators/AdminProfile.vue'));
Vue.component('view-vouchers', require('./components/vouchers/ViewVouchers.vue'));
Vue.component('administrator-students', require('./components/students/AdministratorStudents.vue'));
Vue.component('admin-tasks-header', require('./components/administrators/HeaderTasks.vue'));
Vue.component('admin-messages-header', require('./components/administrators/HeaderMessages.vue'));
Vue.component('admin-notifications-header', require('./components/administrators/HeaderNotifications.vue'));
Vue.component('review-achievements', require('./components/administrators/ReviewAchievements.vue'));
Vue.component('admin-dashboard', require('./components/administrators/Dashboard.vue'));

//MESSAGES
Vue.component('nav-messages', require('./components/dashboard/NavbarMessages.vue'));
Vue.component('inbox', require('./components/messages/Inbox.vue'));
Vue.component('message-history', require('./components/messages/MessageHistory.vue'));

//CREDITS
Vue.component('view-student-credits', require('./components/credits/StudentCredits.vue'));

//CONTACT US
Vue.component('contact-us', require('./components/messages/ContactUs.vue'));

//STUDENTS-ADMIN
Vue.component('view-my-admin', require('./components/students/ViewMyAdministrator.vue'));

//FILE UPLOADS
Vue.component('reference-letters', require('./components/students/ReferenceLetters.vue'));

//HUB COMPONENTS
Vue.component('hub-profile', require('./components/hub/Profile.vue'));
Vue.component('hub-view-students', require('./components/hub/ViewStudents.vue'));
Vue.component('hub-dashboard', require('./components/hub/Dashboard.vue'));
Vue.component('hub-messages-header', require('./components/hub/HeaderMessages.vue'));

//UPLOADS
Vue.component('uploads', require('./components/students/Uploads.vue'));


const app = new Vue({
    el: '#app',
});



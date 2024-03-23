import './bootstrap';

import  { createApp } from "vue";
import noticiaNew from "../components/noticiaNew.vue";
import popularNoticiaSlayder from "../components/polularNoticiaSlayder.vue";
import slay from "../components/slay.vue";
import loginUser from "../components/home/loginUser.vue";

// admin
import loginAdmin from "../components/admin/loginAdmin.vue";
import homeAdmin from "../components/admin/homeAdmin.vue";
createApp(loginAdmin).mount("#loginAdmin");
createApp(homeAdmin).mount("#homeAdmin");




createApp(noticiaNew).mount("#noticiaNew");
createApp(popularNoticiaSlayder).mount("#popularNoticiaSlayder");
createApp(slay).mount("#slay");
createApp(loginUser).mount("#loginUser");

// admin
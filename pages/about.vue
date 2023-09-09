<script setup>
useSeoMeta({
  ogTitle: "About",
  ogDescription: "About RG Anime...",
  ogImage: "logo.png",
  ogUrl: "[og:url]",
  twitterTitle: "About",
  twitterDescription: "About RG Anime...",
  twitterImage: "logo.png",
  twitterCard: "summary",
});

useHead({
  htmlAttrs: {
    lang: "en",
  },
  title: "About",
});
</script>
<template>
  <v-container>
    <div style="height: fit-content; display: grid; place-items: center">
      <div class="pa-5" style="background-color: #212121">
        <h1><img src="/logo.png" alt="loho" height="50" /></h1>
        <p>
          RG Anime is an open source anime streaming platform that offer free
          anime with no ADs and install it as Android or IOS web app. <br />
          Build with Nuxt 3, Vuetify and RG Anime's V2 API.
        </p>
        <div class="my-5">
          <h1>OTHER APPS?</h1>
          USE OR OTHER APPS AVAIBLE ON OUR SITE ITS ALL AD FREE! <br>
          <v-btn
            class="mt-4"
            color="yellow-darken-1"
            prepend-icon="mdi-cash"
            href="https://rgapps.live"
          >
            Link?
          </v-btn>
        </div>
      </div>
    </div>
  </v-container>
</template>

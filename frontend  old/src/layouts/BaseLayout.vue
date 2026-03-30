<template>
  <BaseHeader />
  <main class="container mx-auto max-w-7xl">
    <slot />
  </main>
  <BaseFooter />
</template>

<script>
import BaseHeader from '@components/layout/BaseHeader.vue'
import BaseFooter from '@components/layout/BaseFooter.vue'

export default {
  components: {
    BaseHeader,
    BaseFooter
  }
}
</script>

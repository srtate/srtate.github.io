// @ts-check
import { defineConfig } from "astro/config";

import react from "@astrojs/react";

import { template } from "./src/settings";

import sitemap from "@astrojs/sitemap";

import tailwindcss from "@tailwindcss/vite";

// https://astro.build/config
export default defineConfig({
  integrations: [react(), sitemap()],
  site: template.website_url,
  base: template.base,

  vite: {
    plugins: [tailwindcss()],
  },
});
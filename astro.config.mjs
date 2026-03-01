// @ts-check
import { defineConfig } from 'astro/config';

import remarkMath from 'remark-math'
import rehypeKatex from 'rehype-katex'

import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  site: 'https://srtate.github.io/',
  markdown: {
      remarkPlugins: [remarkMath],
      rehypePlugins: [
          [
              rehypeKatex,
              {
                  // Katex plugin options
              }
          ]
      ]
	},

  integrations: [sitemap()]
});

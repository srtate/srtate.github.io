// 1. Import utilities from `astro:content`
import { defineCollection, z } from 'astro:content';

// 2. Import loader(s)
import { glob } from 'astro/loaders';

// 3. Define your collection(s)
const papers = defineCollection({
      loader: glob({pattern: '**/[^_]*.md', base: "./src/papers"}),
      schema: z.object({
        authors: z.string(),
        title: z.string(),
        pubin: z.string(),
        extra: z.string(),
        sort: z.number(),
        tags: z.array(z.string())
      })
    });

// 4. Export a single `collections` object to register your collection(s)
export const collections = { papers };

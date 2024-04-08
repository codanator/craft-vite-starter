import { defineConfig } from "vite";
import ViteRestart from "vite-plugin-restart";

// https://vitejs.dev/config/
export default ({ command }) => ({
	plugins: [
		ViteRestart({
			reload: ["./templates/**/*"],
		}),
	],
	base: command === "serve" ? "" : "/dist/",
	build: {
		manifest: 'manifest.json',
		outDir: "./web/dist/",
		rollupOptions: {
			input: {
				app: "./src/main.ts",
			},
		},
	},
	server: {
		host: "0.0.0.0",
		fs: {
			strict: false,
		},
		origin: "http://localhost:3000",
		port: 3000,
		strictPort: true,
	},
});

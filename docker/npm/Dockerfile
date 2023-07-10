FROM node:19.7.0-alpine3.17

RUN mkdir -p /var/www/front
WORKDIR /var/www/front

COPY package*.json ./
RUN npm install

COPY . .

RUN npm run build

EXPOSE 4000

ENV NUXT_HOST=0.0.0.0

ENV NUXT_PORT=4000

CMD [ "npm", "run", "dev" ]
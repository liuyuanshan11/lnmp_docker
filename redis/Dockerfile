FROM redis:6.2-alpine

LABEL maintainer="1019213039@qq.com"

## For security settings uncomment, make the dir, copy conf, and also start with the conf, to use it
RUN mkdir -p /usr/local/etc/redis
COPY redis.conf /usr/local/etc/redis/redis.conf

# ARG 为REDIS_PASSWORD变量设置默认值为secret
ARG REDIS_PASSWORD=secret
# 声明参数，为了docker-compose里面可以动态配置
RUN sed -i "s/__REDIS_PASSWORD__/${REDIS_PASSWORD}/g" /usr/local/etc/redis/redis.conf

VOLUME /data

EXPOSE 6379

CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]
#CMD ["redis-server"]

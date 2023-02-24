# ARG 为MYSQL_VERSION变量设置默认值为latest
ARG MYSQL_VERSION=latest

# 先读取.env配置文件参数MYSQL_VERSION，读取不到则从ARG 设置参数中获取
FROM mysql:${MYSQL_VERSION}

# 定义一些说明信息，如作者
LABEL maintainer="1019213039@qq.com"

#####################################
# Set Timezone
#####################################
# UTC东八区时区，与国内差八小时
ARG TZ=UTC

# 增加Dockerfile的可读性，比如当前镜像的版本号
ENV TZ ${TZ}

# 在Dockerfile中设置镜像时区
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone && chown -R mysql:root /var/lib/mysql/

# COPY my.cnf /etc/mysql/conf.d/my.cnf

# 执行mysqld命令
CMD ["mysqld"]

# 暴露端口
EXPOSE 3306

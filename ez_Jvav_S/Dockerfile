FROM openjdk:8u181-jdk-alpine

LABEL Author=Feng

COPY ez_Jvav-0.0.1-SNAPSHOT.jar /

RUN alpine_version=`cat /etc/issue | head -1 | awk '{print $5}'` \
    && echo "https://mirrors.aliyun.com/alpine/v${alpine_version}/main/" > /etc/apk/repositories   \
    && apk update && apk upgrade && apk add --no-cache bash curl e2fsprogs-extra\
    && rm -rf /var/cache/apk/* 
RUN echo "flag{f176c3af829faae619fb3d3b9aa6ae77}" > /f1ag 

EXPOSE 8888

CMD ["java","-jar","ez_Jvav-0.0.1-SNAPSHOT.jar"]


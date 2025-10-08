FROM ubuntu:jammy
# "Created": "2024-04-05T21:49:16Z" , "Version":"2.4.59"

RUN apt-get update \
  && apt-get install -y --no-install-recommends wget ca-certificates

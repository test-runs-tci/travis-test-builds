def next?
  File.basename(__FILE__) == 'Gemfile.next'
end
source 'https://rubygems.org'

ruby '3.0.7'

gem 'rails', '6.1.7.6'

unless ENV['MC_ENV']
  gem 'puma', '6.4.2'
end

gem 'next_rails'

gem 'cgi', '~> 0.3.6'
gem 'nio4r'
gem 'protected_attributes_continued', '1.8.2'
gem 'rake', '13.0.0'
#gem 'mysql2', '0.5.6'
gem 'devise', '4.8.1'
gem 'devise-two-factor', '4.0.2'
gem 'devise-token_authenticatable', '1.1.0'
gem 'haml', '5.1.2'
gem 'cancancan', '3.2.0'
gem 'active_hash', '3.3.1'
#if ENV['GHA_CI']
#  gem 'mobile_cause_sms', git: "https://x-access-token:#{ENV['BUNDLE_GITHUB__COM']}@github.com/mobilecause/eel-client.git"
#  gem 'mc-utils', git: "https://x-access-token:#{ENV['BUNDLE_GITHUB__COM']}@github.com/mobilecause/mc-utils.git", require: false
#else
#  gem 'mobile_cause_sms', git: 'git@github.com:mobilecause/eel-client.git'
#  gem 'mc-utils', git: 'git@github.com:mobilecause/mc-utils.git', require: false
#end
gem 'uuid', '2.3.9'
gem 'braintree', '2.99.0'
gem 'aws-sdk-s3', '1.114.0'
gem 'kt-paperclip', '7.2.2'
gem 'money', '6.13.4'
gem 'comma', '4.5.0'
gem 'jbuilder', '2.9.1'
gem 'jwt', '2.2.1'
gem 'will_paginate', '3.3.1'
gem 'will_paginate-bootstrap', '1.0.2'
gem 'newrelic_rpm', '9.7.1'
gem 'jquery-rails', '4.3.5'
gem 'jquery-ui-rails', '~> 5.0', '>= 5.0.5'
gem 'raphael-rails', '2.1.2'
gem 'airbrake'
gem 'attribute_normalizer', '1.2.0'
gem 'RedCloth', '4.3.4'
gem 'rabl', '0.14.5'
gem 'session-hack-rails2-rails3', '0.1.0' ##### # DO we need this? -jc
gem 'prawn', '2.4.0'
gem 'prawn-table', '0.2.2'
gem 'google_visualr', '2.5.1'
gem 'amqp', '1.8.0'
gem 'amq-protocol', '2.3.2'
gem 'bunny'
gem 'ruby-hmac', '0.4.0'
gem 'rubyzip', '2.3.2'
gem 'mechanize', '>= 2.8.5'
gem 'geocoder', '1.6.7'
gem 'featherlight', '1.3.5'
gem 'countries', '5.7.1'
gem 'cardconnect', '2.3.0', :git => 'https://github.com/mobilecause/cardconnect.git', :branch => 'v2.5.0'
gem 'multipart-post', '2.1.1'
gem 'conred', '0.5.0'
gem 'date_validator'
gem 'authorizenet', '2.0'
gem 'nokogiri', '>= 1.11.4'
gem 'net-ssh', '5.2.0'
gem 'eventmachine', '1.2.7'
gem 'tinymce-rails', '4.9.6'
gem 'momentjs-rails', '2.29.4.1'
gem 'blocks'
gem 'call_with_params'
gem 'request_store', '1.4.1'
gem 'constantcontact', '4.0.0'
gem 'credit_card_validator', '1.3.2'
gem 'smarter_csv', git: 'https://github.com/mobilecause/smarter_csv.git'
gem 'awesome_print', '1.8.0'
gem 'faker', '2.6.0'
gem 'net-sftp', '2.1.2'
gem 'crawler_detect', '1.2.0'
gem 'rqrcode'
gem 'graphql', '1.10.0'
gem 'apollo_upload_server'
gem 'icalendar', '2.5.3'
gem 'wannabe_bool', '0.7.1'
gem 'smartystreets_ruby_sdk', '5.7.0'
gem 'parse-stack', git: 'https://github.com/jorgeacaballero/parse-stack.git'
gem 'omniauth', '2.0.4'
gem 'omniauth-twitter', '1.4.0'
gem 'omniauth-facebook', '7.0.0'
gem 'omniauth-google-oauth2', '1.1.2'
gem 'omniauth-auth0', '~> 3.0'
gem 'omniauth-rails_csrf_protection', '~> 1.0' # prevents forged authentication requests
gem 'oauth', '0.5.6'
gem 'fb_graph2'
gem 'yt', '0.33.4'
gem 'auth0', '5.8'
gem 'maxmind-geoip2'
gem 'rswag'
gem 'rexml'
gem 'sass', '3.7.4'
gem 'sass-rails', '6.0.0'
gem 'uglifier', '4.2.0'
gem 'bootstrap-sass', git: 'https://github.com/hunterae/bootstrap-sass.git', branch: '3.1.1'
gem 'font-awesome-rails', '4.7.0.6'
gem 'jquery-fileupload-rails', git: 'https://github.com/mobilecause/jquery-fileupload-rails.git'
gem 'dotenv', '2.7.5'
gem 'responders', '3.0.1'
gem 'rails-html-sanitizer'
gem 'gon', '>= 6.4.0'
gem 'repost'
gem 'httparty'
gem 'dumpable'
gem 'rack-cors' # this will have to push up to the production environment but review settings in config/application.rb because they are VERY permissive
gem 'activerecord-import'
gem 'transaction_retry'
gem 'babel-transpiler'
gem 'chartkick'
gem 'groupdate'
gem 'rails-healthcheck'

group :development do
  gem 'addressable', '>= 2.8.0'
  gem 'listen', require: false
  gem 'rails-erd' # Gives 'bundle exec erd' to generate ERD of database
  gem 'traceroute'
  gem 'letter_opener'
  gem 'foreman', '~> 0.88.1'
  gem 'graphiql-rails'
  gem 'web-console', '4.1.0'
  gem 'rubocop'
end

group :development, :test do
  gem 'rspec-rails'
  gem 'pdf-inspector', require: 'pdf/inspector'
  gem 'factory_bot_rails'
  gem 'rails-controller-testing', '1.0.5'
  gem 'rspec-its'
  gem 'rspec-activemodel-mocks'
  gem 'capybara', '3.39.2'
  gem 'geckodriver-helper', git: 'https://github.com/bragboy/geckodriver-helper.git', ref: '929e5da958de9f82705e2dce71a7dbba873a461f'
  gem 'selenium-webdriver'
  gem 'jasmine-core'
  gem 'jasmine-rails'
  gem 'shoulda-matchers'
  gem 'coveralls', '0.8.23', require: false
  gem 'brakeman'
  gem 'parallel_tests'
  gem 'rb-readline'
  gem 'byebug'
  gem 'stackprof'
  gem 'bullet'
  gem 'knapsack_pro'
  gem 'vcr'
  gem 'envforcer'
  
end

group :test do
  gem 'database_cleaner'
  gem 'rack_session_access'
  gem 'email_spec', require: false
  gem 'webmock', require: false
  gem 'capybara-screenshot'
end

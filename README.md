# bonsaistory

* How to deploy

  1. Switch to your projet folder
  2. Run `gcloud app deploy app.yaml --project bonsaistory-195903`

# Deploy from Google Repository - mirrored from GITHub
  - Not working...
  1. gcloud beta functions deploy default \
  --source https://source.developers.google.com/projects/bonsaistory-195903/repos/brandontran-bonsaistory/moveable-aliases/master/paths/ \
  --trigger-http

Project: bonsaistory-195903
Repo: brandontran-bonsaistory


* How to add new content

  1. Create content/my-new-file-slug.php

* Images
  1. You can upload to images folder.
    a. This slows down deployment.
  2. Can upload to storage.
    a. Does this have a bandwidth limitation? It may be storage space only.

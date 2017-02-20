<?php if(!defined('KIRBY')) exit ?>

title: Mission
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  infobox:
    label: Flight Details
    type: structure
    entry: >
      {{callsign}} - {{datetime}} - {{location}} - {{max_altitude}} - {{d3_graph}}
    fields:
      callsign:
        label: Callsign
        type:  text
        required: true
      datetime:
        label: Date and Time
        type: date
      location:
        label: Location
        type: text
      max_altitude:
        label: Max Altitude (m)
        type:  text
  text:
    label: Text
    type:  textarea
<?php
$base_dir = dirname(__FILE__);

# Dashboard settings
$conf['dashboard_config'] = $base_dir . "/dashboards.json";
$conf['dashboard_refresh_interval'] = "60";
$conf['graph_template_dir'] = $base_dir . "/graph.d";
$conf['graph_domainname'] = "http://localhost/dev/cebe.cc/graphsky/";
$conf['use_random_graph_domainname'] = false;
$conf['host_metric_group_depth'] = 2;
# If you have your metrics for an entire cluster stored seperately,
# specify that "hostname" here.
# For example, Ganglia uses __SummaryInfo__
$conf['cluster_hostname'] = "*";

# Graphite settings
$conf['graphite_url_base'] = "http://graphite.status.cebe.cc";
$conf['graphite_render_url'] = $conf['graphite_url_base'] . "/render";
$conf['graphite_search_url'] = $conf['graphite_url_base'] . "/metrics/expand/?query=";
# Don't forget the trailing . when specifying a prefix
$conf['graphite_prefix'] = "stats.gauges.server.";
$conf['graphite_puppet_prefix'] = "puppet.";
$conf['graphite_default_env'] = "net";

# Graph settings
$conf['default_time_range'] = '-1 hour';
$conf['default_metric_color'] = '33B5E5';
$conf['default_background_color'] = 'FFFFFF';
$conf['default_foreground_color'] = '000000';

$conf['graph_sizes'] = array(
  'default'=>array(
    'height'=>200,
    'width'=>395
  ),
  'small'=>array(
    'height'=>150,
    'width'=>315
  ),
  'medium'=>array(
    'height'=>250,
    'width'=>535
  ),
  'large'=>array(
    'height'=>400,
    'width'=>800
  ),
  'xlarge'=>array(
    'height'=>900,
    'width'=>1280
  )
);
$conf['graph_sizes_keys'] = array_keys( $conf['graph_sizes'] );

$conf['graph_all_periods_timeframes'] = array(
    "10+minutes",
    "30+minutes",
    "1+hour",
    "2+hours",
    "4+hours",
    "1+day",
    "1+week",
    "1+month",
    "6+months",
    "1+year"
);

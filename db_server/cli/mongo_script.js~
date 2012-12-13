
//Chris Fortier
//cs50 final project
//
//this file allows scripted access to the mongo command shell. 
//For the sake of (relative) simplicity all of the data is loaded as string data type using a custome written python loader. These scripts change the data in the database to the correct types

//run as mongo transit mongo_script.js

//stops
db.stops.find({'stop_code' : {$type : 2 }}).forEach( function (x){ x.stop_code = parseInt(x.stop_code); db.stops.save(x); });
db.stops.find({'stop_id' : {$type : 2 }}).forEach( function (x){ x.stop_id = parseInt(x.stop_id); db.stops.save(x); });
db.stops.find({'zone_id' : {$type : 2 }}).forEach( function (x){ x.zone_id = parseInt(x.zone_id); db.stops.save(x); });
db.stops.find({'stop_lat' : {$type : 2 }}).forEach( function (x){ x.stop_lat = parseFloat(x.stop_lat); db.stops.save(x); });
db.stops.find({'stop_lon' : {$type : 2 }}).forEach( function (x){ x.stop_lon = parseFloat(x.stop_lon); db.stops.save(x); });

//agency
db.agency.find({'agency_id' : {$type : 2 }}).forEach( function (x){ x.agency_id = parseInt(x.agency_id); db.agency.save(x); });

//calendar_dates
db.calendar_dates.find({'date' : {$type : 2 }}).forEach( function (x){ x.date = parseInt(x.date); db.calendar_dates.save(x); });
db.calendar_dates.find({'service_id' : {$type : 2 }}).forEach( function (x){ x.service_id = parseInt(x.service_id); db.calendar_dates.save(x); });
db.calendar_dates.find({'exception_type' : {$type : 2 }}).forEach( function (x){ x.exception_type = parseInt(x.exception_type); db.calendar_dates.save(x); });

//routes
db.routes.find({'route_id' : {$type : 2 }}).forEach( function (x){ x.route_id = parseInt(x.route_id); db.routes.save(x); });
db.routes.find({'route_type' : {$type : 2 }}).forEach( function (x){ x.route_type = parseInt(x.route_type); db.routes.save(x); });
db.routes.find({'agency_id' : {$type : 2 }}).forEach( function (x){ x.agency_id = parseInt(x.agency_id); db.routes.save(x); });

//shpaes
db.shapes.find({'shape_pt_lon' : {$type : 2 }}).forEach( function (x){ x.shape_pt_lon = parseFloat(x.shape_pt_lon); db.shapes.save(x); });
db.shapes.find({'shape_pt_sequence' : {$type : 2 }}).forEach( function (x){ x.shape_pt_sequence = parseInt(x.shape_pt_sequence); db.shapes.save(x); });
db.shapes.find({'shape_dist_traveled' : {$type : 2 }}).forEach( function (x){ x.shape_dist_traveled = parseFloat(x.shape_dist_traveled); db.shapes.save(x); });
db.shapes.find({'shape_pt_lat' : {$type : 2 }}).forEach( function (x){ x.shape_pt_lat = parseFloat(x.shape_pt_lat); db.shapes.save(x); });
db.shapes.find({'shape_id' : {$type : 2 }}).forEach( function (x){ x.shape_id = parseInt(x.shape_id); db.shapes.save(x); });

//stop_times
db.stop_times.find({'stop_id' : {$type : 2 }}).forEach( function (x){ x.stop_id = parseInt(x.stop_id); db.stop_times.save(x); });
db.stop_times.find({'pickup_type' : {$type : 2 }}).forEach( function (x){ x.pickup_type = parseInt(x.pickup_type); db.stop_times.save(x); });
db.stop_times.find({'shape_dist_traveled' : {$type : 2 }}).forEach( function (x){ x.shape_dist_traveled = parseFloat(x.shape_dist_traveled); db.stop_times.save(x); });
db.stop_times.find({'stop_sequence' : {$type : 2 }}).forEach( function (x){ x.stop_sequence = parseInt(x.stop_sequence); db.stop_times.save(x); });
db.stop_times.find({'drop_off_type' : {$type : 2 }}).forEach( function (x){ x.drop_off_type = parseInt(x.drop_off_type); db.stop_times.save(x); });
db.stop_times.find({'trip_id' : {$type : 2 }}).forEach( function (x){ x.trip_id = parseInt(x.trip_id); db.stop_times.save(x); });

//trips
db.trips.find({'route_id' : {$type : 2 }}).forEach( function (x){ x.route_id = parseInt(x.route_id); db.trips.save(x); });
db.trips.find({'direction_id' : {$type : 2 }}).forEach( function (x){ x.direction_id = parseInt(x.direction_id); db.trips.save(x); });
db.trips.find({'shape_id' : {$type : 2 }}).forEach( function (x){ x.shape_id = parseInt(x.shape_id); db.trips.save(x); });
db.trips.find({'trip_id' : {$type : 2 }}).forEach( function (x){ x.trip_id = parseInt(x.trip_id); db.trips.save(x); });
db.trips.find({'service_id' : {$type : 2 }}).forEach( function (x){ x.service_id = parseInt(x.service_id); db.trips.save(x); });
db.trips.find({'block_id' : {$type : 2 }}).forEach( function (x){ x.block_id = parseInt(x.block_id); db.trips.save(x); });

//add loc element to each stop
db.stops.find().forEach( function (x){ x.loc = [x.stop_lon, x.stop_lat]; db.stops.save(x); }); 
db.stops.ensureIndex({loc : "2d"});

//remove christmas eve service
db.stop_times.remove({trip_id:{ $in: [1258,1279,1280,1345,1346,1347,1488,1604,1605,1606,1607,1608,1609,1610,1722,1779,1780,1781,1782,2799] } });
db.trips.remove({trip_id:{ $in: [1258,1279,1280,1345,1346,1347,1488,1604,1605,1606,1607,1608,1609,1610,1722,1779,1780,1781,1782,2799] } });

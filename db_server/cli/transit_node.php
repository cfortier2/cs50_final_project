<?php
	
    /*
     * Chris Fortier
     *
     * cs50 - Final Project
     *
     * transit_node.php is an implementation of a singly linked list optimized for details of a transit node (stop)
     *
     * it contains functions for creating the list, appending and prepending nodes, and searching the list for a given value. 
     *
     * Note: As a performance optimization/design decision - The stops will be sorted from the database server and the list will only be created using sorted data, therefore sorted insert is not included.
     *
     * inList:
     *      will accept a 'key' and 'value' to search for, giving it the ability to search for any data element that may be in the list.
     */


	//class definition
	class transit_node
	{
		public $stop_name;
		public $stop_id;
		public $trip_id;
		public $block_id;
		public $arrival_time;
		public $departure_time;
		public $dist_to_destination;
		public $gCost;
		public $hCost;
		public $fCost;
		public $prevNode;
		public $nextNode;
	

		//constructor
		function __construct($stop_name, $stop_id, $trip_id, $block_id, $arrival_time, $departure_time, $dist, $time)
		{
			//assign variables
			$this->stop_name = $stop_name;
			$this->stop_id = $stop_id;
			$this->block_id = $block_id;
			$this->arrival_time = $arrival_time;
			$this->departure_time = $departure_time;
			$this->trip_id = $trip_id;

			//keep small distances at a reasonable number
			if ($dist < .1)
				$this->dist_to_destination = 0;
			else
				$this->dist_to_destination = $dist;

			$this->prevNode = NULL;
			$this->nextNode = NULL; 

			//update costs
			$this->gCost = 0;
			//$this->gCost($time, $arrival_time);
			$this->hCost();
		}

		//tostring
		public function __toString()
		{
			return $this->stop_name[0];
		}

		//determine difference between start time and arrival time
		function gCost($start_time, $arrival_time)
		{
				//doesn't work yet....need to convert string to DateTime
				date_default_timezone_set('America/New_York');

				$a = new DateTime($arrival_time);

				$time_diff = $arrival_time - $start_time;
				//print("\ngCost: $start_time, $a, $time_diff ");

				//update fCost
				$this->fCost();
		}

		//calculate the hCost based on an average speed of 30mph
		function hCost()
		{
			//hCost is distance /speed (mph) * 60 (minutes in an hour) to get the estimated number of minutes
			$this->hCost = $this->dist_to_destination / 30 * 60;

			//update fCost
			$this->fCost();
		}

		//update fCost
		function fCost()
		{
			$this->fCost = $this->gCost + $this->hCost;
		}
	}
	
	//linked list
	class transit_list
	{
		//link to first node
		private $firstNode;
		
		//link to last node
		private $lastNode;

		//count
		private $nodeCount;

		//destination found
		private $destinationFound;

		//constructor
		function __construct()
		{
			$this->firstNode = NULL;
			$this->lastNode = NULL;
			$this->nodeCount = 0;
			$this->destinationFound = FALSE;
		}	

		//prepend node to front of list
		function prepend(&$node)
		{
			//if list is empty
			if ($this->firstNode == NULL)
			{
				//update list variables
				$this->firstNode = $node;
				$this->lastNode = $node;
				$this->nodeCount = 1;
			}
			//list is not empty
			else
			{
				//reassign firstNode
				$this->firstNode->prevNode = $node;
				$node->nextNode = $this->firstNode;
				$this->firstNode = &$node;
				$this->nodeCount++;
			}	
		}

		//append node to end of list
		function append(&$node)
		{
			//if list is empty
			if($this->firstNode == NULL)
			{
				$this->prepend($node);
			}
			else
			{
				//reassign lastNode to this node
				$node->prevNode = $this->lastNode;
				$this->lastNode->nextNode = $node;
				$this->lastNode = $node;

				$this->nodeCount++;
				//print_r($node);
			}
		}

		//remove nodes after $stop_id
		function remove_after($stop_id)
		{

			//until $node is found, remove the lastNode
			$nodeFound = FALSE;
			$end_cursor;
			while ($nodeFound == FALSE)
			{
				//cursor
				$start_cursor;
				
				//find next to last node
				$start_cursor = $this->firstNode;
				while ($start_cursor->nextNode != $this->lastNode)
				{
					$start_cursor = $start_cursor->nextNode;
				}

				//print start_cursor
				//print("\nstart_cursor\n:");
				//print_r($start_cursor);

				//work with lastNode
				$end_cursor = $this->lastNode;
				//print("\nend_cursor:\n");
				//print_r($end_cursor);
					
				//check if this is the correct stop
				if ($end_cursor->stop_id == $stop_id)
				{
					//stop removing
					$nodeFound = TRUE;
				}
				else
				{
					//remove lastNode
					unset($end_cursor);
					$end_cursor = NULL;

					//reassign lastNode
					$this->lastNode = $start_cursor;

					//assign lastNode to null
					$this->lastNode->nextNode = NULL;

					//update nodeCount
					$this->nodeCount--;
					//print($this->nodeCount);
				}

			} 
		}

		//return nodeCount
		function getNodeCount()
		{
			return $this->nodeCount;
		}
		
		//return nodeCount
		function getDestinationFound()
		{
			return $this->destinationFound;
		}

		//return the head element
		function getHead()
		{
			return $this->firstNode;
		}
		
		//return the second stop in the list
		function getSecondStop()
		{
			return $this->firstNode->nextNode;
		}

		//prints each node name
		function printList()
		{
			$cursor = $this->firstNode;
			print_r($cursor);

			print("There are $this->nodeCount nodes \n");
		}

		//returns true if  is in the list
		function inList($key, $value)
		{
			//debug
			//print("\nSearching for: key: $key : value: $value");

			//cursor to walk the list
			$cursor = $this->firstNode;
			
			//walk the list
			while ($cursor != NULL)
			{
				//print($cursor->$key . "\n");

				//compare values
				if($cursor->$key == $value)
				{
					//print("\nFOUND: " . $cursor->$key . "\n");

					//update list
					$this->destinationFound = TRUE;
					return TRUE;
				}

				//move cursor
				$cursor = $cursor->nextNode;	
			}

			//not found
			//print("\nNOT FOUND\n");
			return FALSE;
		}
	}

?>



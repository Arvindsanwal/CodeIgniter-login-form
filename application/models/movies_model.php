<?php

class Movies_Model extends CI_Model
{
	public function getAllMovies()
	{
		$allMovies = $this->db->get('movies');
		if($allMovies->num_rows() > 0)
		{
			foreach($allMovies->result() as $movie)
			{
				$movies[] = $movie->name;
			}
		}
		return $movies;
	}
}

?>
